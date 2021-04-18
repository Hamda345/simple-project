<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "Vehicules";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
if (!$conn){
    die("Connection failed: " . mysqli_conncet_error());
}