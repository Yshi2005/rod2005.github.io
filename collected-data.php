<?php
  // Start the session
  session_start();

  
  header('Content-Type: text/html; charset=utf-8');

  // Set caching headers to ensure the page is not cached
  header('Cache-Control: no-cache, no-store, must-revalidate');
  header('Pragma: no-cache');
  header('Expires: 0');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Data</title>
  
  <style>
   
    body {
        background: url('3.png ') center/cover fixed;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
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
    margin-top: 0;
    font-size: 25px; 
    font-weight: bold;
    color: white; 
  }

    header {
      background-color: transparent;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    h1 {
      margin: 0;
    }
    nav {
      padding: 10px 0;
      text-align: center;
    }
    nav a {
      color: #fff;
      text-decoration: none;
      padding: 10px 20px;
    }
    nav a:hover {
        color: black;
      background-color: white;
      border-radius: 6px;
    }
  </style>
</head>
<body>
  <header>
    
  <img id="logo" src="logo.png" alt="Logo">
    <div id="logo-text">TI E-Registration</div>
    <nav>
      <a href="css.php">CSS</a>
      <a href="barcttdgas.php">BARCTTDGAS</a>
      <a href="abm.php">ABM</a>
      <a href="humss.php">HUMSS</a>
      <a href="stem.php">STEM</a>
    </nav>
  </header>
  
</body>
</html>
