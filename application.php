<?php
include_once 'header.php';
?>

<div class="space"></div>
    <section class="signupform">
            <h2>Application</h2>
           
            <form action="inc/application.inc.php" method="post">

                <div class="signup-item">
                    <label for="sendername">Fullname: </label>
                    <input type="text" name="sendername" placeholder="Your full name" required>
                </div>
                <div class="signup-item">
                    <label for="email">Text: </label>
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="signup-item">
                    <label for="message">Text: </label>
                    <input type="text" name="message" placeholder="Something abot youself....." required>
                </div>
                <?php 
                if(isset($_GET["id"])){
                    echo "<input type='hidden' name='jobid' value='". $_SESSION["id"] ."'";}
                    ?>
                    <button type="reset" name="reset">Reset</button>
                    <button type="submit" name="create">Apply</button>
            </form>
            <div class="space"></div>