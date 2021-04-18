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
    if(!preg_match("/^[a-zA-Z0-9]*$/"), $username){
       $results= true;
    }
    else {
        $results = false;
    }
    return $results;
   }
   function invalEmail($email) {
    $results;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
       $results = true;
    }
    else {
        $results = false;
    }
    return $results;
   }
   function pwdMatch($pwd, $pwdRepeat) {
    $results;
    if($pwd != $pwdRepeat){
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