<?php
include_once 'header.php';
?>
<div class="space"></div>
<section class="signupform">
        <h2>Signup</h2>
        <form action="signup.inc.php" method="post">
            <div class="signup-item">
                <label for="name">Name: </label>
                <input type="text" name="name" placeholder="Full name" required>
            </div>
            <div class="signup-item">
                <label for="email">E-mail: </label>
                <input type="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="signup-item">
                <label for="uid">Username: </label>
                <input type="text" name="uid" placeholder="username" required>
            </div>
            <div class="signup-item">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" required>
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" required>
            </div>
            <div class="signup-item">
                <label for="password">Password: <br></label>
                <input type="password" name="pwd" placeholder="Password" required>
            </div>
            <div class="signup-item">
                <label for="repeatpwd">Confirm password: </label>
                <input type="password" name="repeatpwd" placeholder="re-enter password" required>
            </div>
            <button class="btn-reg" type="reset" name="reset">Reset</button>
            <button class="btn-reg" type="submit" name="submit">Sign Up</button>
        </form>
</section>
    </body>
</html>