<?php
include_once 'header.php';
?>

<div class="wrapper">
    <section>
    <?php
if(isset($_SESSION["useruid"])){
    echo "<p>Greetings, " . $_SESSION["useruid"] . "</p>";
}
?>
        <h1>Welcome!</h1>
    </section>
</div>

</body>

</html>




