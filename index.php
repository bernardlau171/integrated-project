<?php
include_once 'header.php';
?>


<div class="wrapper">
    <div class="parallax-1">
        <section>
            <?php
            if(isset($_SESSION["useruid"])){echo "<h1>Welcome, " . $_SESSION["useruid"] . "</h1>";}
            else{echo"<h1>Welcome!</h1>";}
            ?>
            <div class="space"></div>
        </section>
    </div>
</div>

</body>

</html>




