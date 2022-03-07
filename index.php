<?php
include_once 'header.php';
include 'inc/dbh.inc.php';
?>


<div class="wrapper">
    <div class="parallax-1">
        <section>
            <?php
            if(isset($_SESSION["useruid"])){
                    $uid = $_SESSION["useruid"];
                    $sql = "SELECT * FROM job";
                    $query = mysqli_query($conn, $sql);
                    echo "<h1>Welcome, ".$uid."</h1>";
                    foreach($query as $q){
                        echo "<div class='container'><div class='box'><div class='content'>";
                        echo"<h2>". $q['jobTitle'] ."</h2>";
                        echo "<h3>". $q['salary'] ."</h3>";
                        echo"<p>$". substr($q['jobDuty'], 0, 50) ."...</p>";
                        echo"<a href='jobdetails.view.php?id=". $q['Id'] . "' class='btn btn-light'>Read More</a>";
                        echo"</div></div></div>";}
                    }
                    else{echo"<h1>Welcome!</h1>";}
            ?>
            <div class="space"></div>
        </section>
    </div>
</div>

</body>

</html>




