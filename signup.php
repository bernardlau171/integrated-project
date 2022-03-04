<?php
include_once 'header.php';
?>
<section class="signupform">
        <h2>Signup</h2>
        <form action="signup.inc.php" method="post">
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" placeholder="Full name">
            </div>
            <div>
                <label for="email">E-mail: </label>
                <input type="text" name="email" placeholder="E-mail">
            </div>
            <div>
                <label for="uid">Username: </label>
                <input type="text" name="uid" placeholder="username">
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="pwd" placeholder="Password">
            </div>
            <div>
                <label for="repeatpwd">Confirm password: </label>
                <input type="password" name="repeatpwd" placeholder="re-enter password">
            </div>
            <button type="reset" name="reset">Reset</button>
                
            
            <button type="submit" name="submit">Sign Up</button>
        </form>
</section>
    </body>
</html>