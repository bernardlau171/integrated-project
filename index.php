<?php
include_once 'header.php';
?>

<div class="wrapper">
    <section>
    <?php
if(isset($_SESSION["useruid"])){
    echo "<h1>Welcome, " . $_SESSION["useruid"] . "</h1>";
}
else{
    echo"<h1>Welcome!</h1>";
}
?>
        
    </section>
</div>

</body>

</html>




