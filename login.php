<?php
include_once 'header.php';
?>
<div class="space"></div>
    <section class="signupform">
            <h2>Log in</h2>
            <form action="inc/login.inc.php" method="post">
                <div class="signup-item">
                    <label for="uid">Username:<br></label>
                    <input type="text" name="uid" placeholder="username" required>
                </div>
                <div class="signup-item">
                    <label for="password">Password: <br></label>
                    <input type="password" name="pwd" placeholder="Password" required>
                </div>
                <button class="btn-login" type="submit" name="submit">Log in</button>
            </form>
            <?php
                if(isset($_GET["error"])){
                if($_GET["error"] == "loginfailed"){
                    echo "<p>Incorrect username/password.</p>";
                }
            }
        
        ?>
        </section>

</body>
</html>