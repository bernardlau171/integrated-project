<?php
include_once 'header.php';
include 'inc/dbh.inc.php'
?>

<div class="wrapper">
    <section>
<?php
if(isset($_SESSION["useruid"])){
    $uid = $_SESSION["useruid"];
    $sql = "SELECT * FROM job where useruid = '$uid'";
    $query = mysqli_query($conn, $sql);
    echo "<h1>Welcome to company page, ".$uid."</h1>";
    echo " <div class='text-center'><a href='create.php' class='btn btn-outline-dark'>+ Create a new job post</a></div>";
    foreach($query as $q){
        echo "<div class='container'><div class='box'><div class='content'>";
        echo"<h2>". $q['jobTitle'] ."</h2>";
        echo "<h3>". $q['salary'] ."</h3>";
        echo"<p>". substr($q['jobDuty'], 0, 50) ."...</p>";
        echo"<a href='jobdetails.view.php?id=". $q['Id'] . "' class='btn btn-light'>Read More</a>";
        echo"</div></div></div>";}
    }
?>

<div class></div>
        
    </section>
</div>

</body>

</html>