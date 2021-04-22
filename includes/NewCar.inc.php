<?php

if (isset($_POST["submit2"])){
    $carBrand = $_POST["carBrand"];
    $carPrice = $_POST["carPrice"];
    $carDoors = $_POST["carDoors"];
    $carSeats = $_POST["carSeats"];
    $carFueltype = $_POST["carFueltype"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (emptyInputCar($carBrand, $carPrice, $carDoors, $carSeats, $carFueltype) !== false) {
        header("location: ../NewCar.php?error=emptyinput");
        exit();
    } 
    createCar($conn, $carBrand, $carPrice, $carDoors, $carSeats, $carFueltype);

 
}
else {
    header("location: ../NewCar.php");
    exit();
}