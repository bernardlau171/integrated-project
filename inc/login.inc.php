<?php

if(isset($_POST["submit"])){
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

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