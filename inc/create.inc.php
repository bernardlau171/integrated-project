<?php

require_once 'dbh.inc.php';

if(isset($_POST["create"])){
    $title = $_POST["jobtitle"];
    $salary = $_POST["salary"];
    $requirement = $_POST["jobrequirement"];
    $duty = $_POST["jobduty"];
    $uid = $_POST["useruid"];

    $title = htmlspecialchars($title);
    $salary = htmlspecialchars($salary);
    $requirement = htmlspecialchars($requirement);
    $duty = htmlspecialchars($duty);
    

    require_once 'functions.inc.php';


    createJob($conn,$title,$salary,$requirement,$duty,$uid);
}
else{
    header("location: ../create.php");
    exit();
}
