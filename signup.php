<?php
include_once 'header.php';
?>
<div class="space"></div>
    <section class="signupform">
            <h2>Signup</h2>
           
            <form action="inc/signup.inc.php" method="post">
                <div class="signup-item">
                    <label for="nickname">Nickname: </label>
                    <input type="text" name="nickname" placeholder="Nickname" required>
                </div>
                <div class="signup-item">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="signup-item">
                    Type: 
                    <label for="company">Company</label>
                    <input type="radio" name="type" value="company" required>
                    <label for="individual">individual</label>
                    <input type="radio" name="type" value="individual" required>
                </div>
                <div class="signup-item">
                    <label for="uid">Username: </label>
                    <input type="text" name="uid" placeholder="username" required>
                </div>
                <div class="signup-item">
                    <label for="password">Password: <br></label>
                    <input type="password" name="pwd" placeholder="Password" required>
                </div>
                <div class="signup-item">
                    <label for="repeatpwd">Confirm password: </label>
                    <input type="password" name="repeatpwd" placeholder="re-enter password" required>
                </div>
                <div class="signup-item">
                    <label for="user-img">Please upload a profile image</label>
                    <input type="file" name="user-img">
                </div>
                <button class="btn-reg" type="reset" name="reset">Reset</button>
                <button class="btn-reg" type="submit" name="submit">Sign Up</button>
            </form>
            <div class="space"></div>
        <?php
                if(isset($_GET["error"])){
                if($_GET["error"] == "passwordmismatch"){
                    echo "<p>Password mismatch!</p>";
                }
                else if($_GET["error"] == "stmtfailed"){
                    echo "<p>Something went wrong, try again -_-</p>";
                }
                else if($_GET["error"] == "usernametaken"){
                    echo "<p>Username was taken</p>";
                }
                else if($_GET["error"] == "none"){
                    echo "<p>Success, you have signed up!</p>";
                }
            }
        ?>
    </section>

    </body>
</html>