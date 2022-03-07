<?php

if(isset($_POST["create"])){
    $message = $_POST["message"];
    $job = $_POST["jobid"];
    $sender = $_POST["senderuid"];

    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    createJob($conn,$message,$job,$sender);
}
else{
    header("location: ../create.php");
    exit();
}