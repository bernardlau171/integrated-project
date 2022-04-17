<?php

if(isset($_POST["submit"])){
    $username = mysqli_real_escape_string($conn,$_POST["uid"]);
    $pwd = mysqli_real_escape_string($conn,$_POST["pwd"]);

    $username = htmlspecialchars($username);
    $pwd = htmlspecialchars($pwd);

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    loginUser($conn, $username, $pwd);
    
}
else{
    header("location: ../login.php");
    exit();
}