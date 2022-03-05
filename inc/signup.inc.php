<?php

if(isset($_POST["submit"])){
    $nickname = $_POST["nickname"];
    $email = $_POST["email"];
    $type = $_POST["type"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $repeatpwd = $_POST["repeatpwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(pwdMatch($pwd, $repeatpwd)!==false){
        header("location: ../signup.php?error=passwordmismatch");
        exit();
    }
    if(uidExists($conn, $username)!==false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn,$nickname,$email,$type,$username,$pwd);
}
else{
    header("location: ../signup.php");
    exit();
}

