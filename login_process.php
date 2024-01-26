<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST["username"];
    $password = $_POST["password"];

   
    $validUsername = "Admin"; 
    $validPassword = "admin123"; 

    if ($username == $validUsername && $password == $validPassword) {
        // Successful login, redirect to a welcome page or perform other actions
        header("Location: collected-data.php");
        exit();
    } else {
        // Invalid credentials, display an error message
        echo "Invalid username or password";
    }
}
?>