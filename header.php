<?php
session_start();
?>

 <!DOCTYPE html>
<html>
    <meta charset = "utf-8">
    <head>
        <title>My personal work</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="signup-style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> 
    </head>
    <body bgcolor="#404140">
        <header>
            <ul>
                <li><span>Cars</span></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Find Cars</a></li>
                <?php
                 if (isset($_SESSION["usersuid"])) {
                     echo "<li><a href='profile.php'>Profile</a></li>";
                     echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                 }
                 else {
                    echo "<li><a href='login.php'>Login</a></li>";
                    echo "<li><a href='signup.php'>Signup</a></li>";
                 }   
                ?>
            </ul>
        </header>
    </body>
</html>
