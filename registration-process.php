<title>Information</title>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $full_name = $_POST["full_name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $number = $_POST["number"];
    $strand = $_POST["strand"];
    $gender = $_POST["gender"];
    $grade = $_POST["grade"];
    


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["tmp_name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

  
    echo "<h2>Submitted Information:</h2>";
    echo "<p><strong>Full Name:</strong> $full_name</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Birthdate:</strong> $birthdate</p>";
    echo "<p><strong>Email Address:</strong> $email</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Contact Number:</strong> $number</p>";
    echo "<p><strong>Strand:</strong> $strand</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Grade Level:</strong> $grade</p>";
}
?>
