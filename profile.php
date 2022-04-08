<?php
include_once 'header.php';
?>

<div class="parallax-1">

<?php

if(isset($_SESSION["useruid"])){
    $uid = $_SESSION["useruid"];
    $sql = "SELECT * FROM users where userUid = '$uid'";
    $query = mysqli_query($conn, $sql);
}?>

<

<?php foreach($query as $q){?>
    <div class="profilebox">
        <img src="<?php echo $q['userImg']?>" class="profilebox-img">
        <h2><br>Name: <?php echo $q['userName'] ?></h2>
        <p><br>Email: <?php echo $q['userEmail']?></p>
        <p><br>Type: <?php echo $q['userType']?></p>
    </div><?php } ?>

    </div>

</body>
</html>