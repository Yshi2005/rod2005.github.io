<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design.css?v=<?php echo time(); ?>">
    <title>TI E-Registration</title>
</head>

<body>
<div id="sidebar">
<div id="logo-container">
    <img id="logo" src="logo.png" alt="Logo">
    <div id="logo-text">TI E-Registration</div>
  </div>
    <ul>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="registration.php">Registration Form</a></li>
        <li><a href="privacy.php">Privacy Statement</a></li>
        <li><a href="terms.php">Terms and Conditions</a></li>
        <li><a href="about.php">About</a></li>
    </ul>
<footer>
<p>&copy; <?php echo date("2024-2025"); ?> Tanauan Institute. All rights reserved.</p>
</footer>
</div>

</body> 

<div class="welcome-message">
    <h1>Welcome!</h1>
        <p>This site is for school purposes only. Please read the Terms and Conditions <br>
             before proceeding to the registration.</p>
        
<?php

session_start();
if (!isset($_SESSION['terms_accepted'])) {
    include 'terms_popup.php';
}
?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('overlay').style.display = 'flex';
        document.getElementById('acceptBtn').addEventListener('click', function () {
            document.getElementById('overlay').style.display = 'none';
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'accept_terms.php', true);
            xhr.send();
        });
    });
</script>

 <div id="overlay">
    <div id="popup">
        <h2>Important Message</h2>
        <p>Please Read the Terms and Conditions before <br>
         proceeding to the registration. </p>
        <button id="acceptBtn">OK</button>
    </div>
</div>
</div>
</div>

</html>


