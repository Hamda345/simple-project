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
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <header>
            <ul>
                <li><span>Cars</span></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="FindCars.php">Find Cars</a></li>
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
