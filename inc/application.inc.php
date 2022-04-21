<?php

if(isset($_POST["apply"])){
    $message = $_POST["message"];
    $job = $_POST["jobid"];
    $sender = $_POST["sendername"];
    $sendermail = $_POST["email"];

    $message = htmlspecialchars($message);
    $job = htmlspecialchars($job);
    $sender = htmlspecialchars($sender);
    $sendermail = htmlspecialchars($sendermail);
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    createApplication($conn,$message,$job,$sender,$sendermail);
}
else{
    header("location: ../application.php");
    exit();
}