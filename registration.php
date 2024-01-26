<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="registration.css?v=<?php echo time(); ?>">
    <title>Registration Form</title>
</head>
<body>

<style>
    
        body {
            background: url('bg.jpg ') center/cover fixed;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background: linear-gradient(to right, white, blue);
            padding-left: 65px;
            padding-right: 5px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 750px;
            height: 645px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input, select {
            width: 45%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: gray;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: blue;
        }

        #logo-container {
    display: flex;
    align-items: overlay;
  }

  #logo {
    width: 60px; 
    height: 60px; 
    margin-right: 5px;
    margin-top: 10px; 
    margin-bottom: 0;
  }

  #logo-text {
    margin-top: 35px;
    font-size: 25px; 
    font-weight: bold;
    color: black; 
  }

  footer {
    margin-left: 0% ;
    width: 300%;
    background-color: #333;
    color: #fff;
    padding: 20px;
}

.container {
    width: 60%;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li:last-child {
    margin-right: 0;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: underline;
}

p {
    margin-top: 10px;
}

    </style>

   
    <form action="registration-process.php" method="post" enctype="multipart/form-data">
    <header><div id="logo-container">
    <img id="logo" src="logo.png" alt="Logo">
    <div id="logo-text">TI E-Registration</div></header>
        <label for="full_name">Full Name (First name, Middle name, Surname):</label>
        <input type="text" name="full_name" required> <select name="strand" required><option value="" disabled selected>Select your Strand</option>
            <option value="css">CSS(Computer System Servicing)</option>
            <option value="abm">ABM(Accountancy, Business Management)</option>
            <option value="barctdgas">BARCTTDGAS(Bartending, cookery, tourism, technical drafting, and general academic strand)</option>
            <option value="stem">Stem(The Science, Technology, Engineering, and Matemathics)</option>
            <option value="hummss">Hummsss(Humanities and social sciences)</option></select>
        </select>


        <label for="age">Age:</label>
        <input type="number" name="age" required> <select name="gender" required><option value=""disabled selected>Select your Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="birthdate">Birthdate:</label>
        <input type="date" name="birthdate" required> <select name="grade" required><option value="" disabled selected>Select your Grade Level</option>
            <option value="11">11</option>
            <option value="12">12</option>    
    </select>

        <label for="email">Email Address:</label> 
        <input type="email" name="email" required>

            <label for="number">Contact Number:</label>
            <input type="text" name="number" required>

        <label for="image">Upload your Image:</label>
        <input type="file" name="image" accept="image/*" required><br>

        <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea><br>

        <input type="submit" value="Submit">
        <p>&copy; <?php echo date("2024-2025"); ?> Tanauan Institute. All rights reserved.</p>

    </form>

</body>
</html>