<?php
include_once 'header.php';
?>


<div class="wrapper">
    <div class="parallax-1">
    <div class="space"></div>
        <section>
            <?php
            if(isset($_SESSION["useruid"])){
                    $uid = $_SESSION["useruid"];
                    $sql = "SELECT * FROM job";
                    $query = mysqli_query($conn, $sql);
                    echo "<h1>Welcome, ".$uid."</h1>";}
                    ?>
                    <scetion class="container">
                        <?php if(isset($_SESSION["useruid"])){ foreach($query as $q){?>
                            <div class="card">
                                <h2><?php echo $q['jobTitle'] ?></h2>
                                <p>Salary: <?php echo $q['salary']?></p>
                                <p><?php echo substr($q['jobDuty'], 0, 50)?>...</p>
                                <a href="jobdetails.php?id=<?php echo $q['Id'] ?>"> View</a>
                </div><?php }} ?>
            </section>
            <div class="space"></div>
            <div class="space"></div>
        </section>
    </div>
</div>

</body>

</html>