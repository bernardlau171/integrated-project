<?php
include_once 'header.php';
session_start();

echo "<div class='parallax-4'>";

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM job where Id = '$id'";
    $query = mysqli_query($conn, $sql);
    $_SESSION['jobid'] = $id;
    foreach($query as $q){?>
    <div class="titlebox">
        <h1><?php echo $q['jobTitle'] ?></h1>
        <p><br>Salary: <?php echo $q['salary']?></p>
        <p><br><?php echo $q['jobDuty']?></p>
        

        <button class="btn-primary"><a href="application.php">Apply</a></button>
        <?php  }} ?>

        </div>

    </div>