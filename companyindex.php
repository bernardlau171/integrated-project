<?php
include_once 'header.php';
?>

<div class="wrapper">
    <section>
    <?php
if(isset($_SESSION["useruid"])){
    /*$sql = "SELECT * FROM job";
    $query = mysqli_query($conn, $sql);*/
    echo "<h1>Welcome to company page, " . $_SESSION["useruid"] . "</h1>";
    echo " <div class='text-center'><a href='create.php' class='btn btn-outline-dark'>+ Create a new post</a></div>";
}
?>
        
    </section>
</div>

</body>

</html>