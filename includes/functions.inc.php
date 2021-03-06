<?php
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
 $results;
 if( empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
    $results= true;
 }
 else {
     $results = false;
 }
 return $results;
}
function invalidUid($username) {
    $results;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
       $results= true;
    }
    else {
        $results = false;
    }
    return $results;
   }
   function invalidEmail($email) {
    $results;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
       $results = false;
    }
    else {
        $results = true;
    }
    return $results;
   }
   function pwdMatch($pwd, $pwdRepeat) {
    $results;
    if($pwd !== $pwdRepeat){
       $results = true;
    }
    else {
        $results = false;
    }
    return $results;
   }
   function uidExists($conn, $username, $email) {
   $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)){
       header("location: ../signup.php?error=stmtfailed");
       exit();
   }
   mysqli_stmt_bind_param($stmt, "ss", $username, $email);
   mysqli_stmt_execute($stmt);

   $resultsData = mysqli_stmt_get_result($stmt);

   if ($row = mysqli_fetch_assoc($resultsData)) {
       return $row;
   }
   else {
       $results = false;
       return $results;
   }
   mysqli_stmt_close($stmt);
   }
   function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}
function emptyInputLogin($username, $pwd) {
    $results;
    if( empty($username) || empty($pwd) ){
       $results= true;
    }
    else {
        $results = false;
    }
    return $results;
   }
function  loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit(); 
    }
    else if($checkPwd === true) {
        session_start();
        $_SESSION["usersid"] = $uidExists["usersId"];
        $_SESSION["usersuid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();
    }
   }
   function emptyInputCar($carBrand, $carPrice, $carDoors, $carSeats, $carFueltype) {
    $results;
    if( empty($carBrand) || empty($carPrice) || empty($carDoors) || empty($carSeats) || empty($carFueltype)){
       $results= true;
    }
    else {
        $results = false;
    }
    return $results;
   }
   function createCar($conn, $carBrand, $carPrice, $carDoors, $carSeats, $carFueltype) {
    $sql = "INSERT INTO cars (carsBrand, carsPrice, carsDoors, carsSeats, carsFueltype) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../NewCar.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssss", $carBrand, $carPrice, $carDoors, $carSeats,$carFueltype);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../NewCar.php?error=none");
    exit();
}
