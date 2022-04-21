<?php
include_once 'header.php';
?>

<div class="space"></div>
    <section class="signupform">
            <h2>Post new job listing</h2>
           
            <form action="inc/create.inc.php" method="post">
                <div class="signup-item">
                    <label for="jobtitle">Job title: </label>
                    <input type="text" name="jobtitle" placeholder="job title" required>
                </div>
                <div class="signup-item">
                    <label for="salary">Salary: </label>
                    <input type="text" name="salary" placeholder="salary" required>
                </div>
                <div class="signup-item">
                    <label for="jobrequirement">Job Requirement: </label>
                    <input type="text" name="jobrequirement" placeholder="job requirement" required>
                </div>
                <div class="signup-item">
                    <label for="jobduty">Job Requirement: </label>
                    <input type="text" name="jobduty" placeholder="job duty" required>
                </div>
                <?php if(isset($_SESSION["useruid"])){
                    echo "<input type='hidden' name='useruid' value='". $_SESSION["useruid"] ."'";} ?>
                
                <button type="reset" name="reset">Reset</button>
                <button type="submit" name="create">Create</button>
            </form>
            <div class="space"></div>

            <?php
                if(isset($_GET["error"])){
                if($_GET["error"] == "stmtfailed"){
                    echo "<p>Something went wrong, try again -_-</p>";
                }
                else if($_GET["error"] == "none"){
                    echo "<p>Success, job created!</p>";
                }
            }
        ?>