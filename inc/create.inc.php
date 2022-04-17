<?php

if(isset($_POST["create"])){
    $title = mysqli_real_escape_string($conn, $_POST["jobtitle"]);
    $salary = mysqli_real_escape_string($conn, $_POST["salary"]);
    $requirement = mysqli_real_escape_string($conn, $_POST["jobrequirement"]);
    $duty = mysqli_real_escape_string($conn, $_POST["jobduty"]);
    $uid = mysqli_real_escape_string($conn, $_POST["useruid"]);

    $title = htmlspecialchars($title);
    $salary = htmlspecialchars($salary);
    $requirement = htmlspecialchars($requirement);
    $duty = htmlspecialchars($duty);
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    createJob($conn,$title,$salary,$requirement,$duty,$uid);
}
else{
    header("location: ../create.php");
    exit();
}
