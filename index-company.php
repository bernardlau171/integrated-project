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
            $query = mysqli_query($conn, $sql);
            echo "<h1>Welcome to company page, ".$uid."</h1><br>";
            echo " <div class='text-center'><a href='create.php'>+ Create a new job post</a><br><br>Your listed jobs</div><div class='space'></div>";
        }?>
        <scetion class="container">
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