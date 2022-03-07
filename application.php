<?php
include_once 'header.php';
?>

<div class="space"></div>
    <section class="signupform">
            <h2>Application</h2>
           
            <form action="inc/create.inc.php" method="post">
                <div class="signup-item">
                    <label for="jobtitle">Text: </label>
                    <input type="text" name="jobtitle" placeholder="Something abot youself....." required>
                </div>
                <?php 
                if(isset($_SESSION["jobid"])){
                    echo "<input type='hidden' name='jobid' value='". $_SESSION["jobid"] ."'";}

                    if(isset($_SESSION["useruid"])){
                        echo "<input type='hidden' name='senderuid' value='". $_SESSION["useruid"] ."'";}
                    ?>
                    <button type="reset" name="reset">Reset</button>
                <button type="submit" name="create">Create</button>
            </form>
            <div class="space"></div>