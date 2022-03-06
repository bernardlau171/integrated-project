<?php
include_once 'header.php';
?>

<div class="wrapper">
    <section>
    <?php
if(isset($_SESSION["useruid"])){
    echo "<h1>Welcome to company page, " . $_SESSION["useruid"] . "</h1>";
}
?>
        
    </section>
</div>

</body>

</html>