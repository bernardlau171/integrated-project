<?php
include_once 'header.php';
?>

<div class="wrapper">
<div class="parallax-1">
    <section>
        <?php
        if(isset($_SESSION["useruid"])){
            $uid = $_SESSION["useruid"];
            $sql = "SELECT * FROM job where userUid = '$uid'";
            $sql2 = "SELECT * FROM applicationmsg where Id in ('3','4','5')";
            $query = mysqli_query($conn, $sql);
            $query2 = mysqli_query($conn, $sql2);
            echo "<h1>Welcome to company page, ".$uid."</h1><br>";
            echo " <div class='text-center'><a href='create.php'>+ Create a new job post</a></div><div class='space'></div>";
        }?>
        <section class="container">
        <h2>New applications</h2>
        <?php foreach($query2 as $q2){?>
                <div class="card">
                    <h2><?php echo $q2['senderName'] ?></h2>
                    <p><br>Salary: <?php echo $q2['jobId']?></p>
                    <p><br><?php echo $q2['applymessage']?></p>
                </div><?php } ?>
        </section>
        <scetion class="container">
            <h2>Your listed jobs</h2>
            <?php foreach($query as $q){?>
                <div class="card">
                    <h2><?php echo $q['jobTitle'] ?></h2>
                    <p><br>Salary: <?php echo $q['salary']?></p>
                    <p><br><?php echo substr($q['jobDuty'], 0, 50)?>...</p>
                    <a href="jobdetails.php?id=<?php echo $q['Id'] ?>"> View</a>
                </div><?php } ?>
            </section>
        </div>
        
    </section>
    <div class="space"></div>    
</div>
</div>
</body>

</html>