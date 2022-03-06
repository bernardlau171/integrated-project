<?php
session_start();
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Job hunting site</title>
            <link rel="stylesheet" type="text/css" href="style.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        </head>
        <body>
        <div class="wrapper">
        <nav id="navbar">
                <ul class="navlist">
                    <li class="navitem">
                        <a href="index.php">GetaJob.com</a>
                    </li>
                    <li class="navitem">
                        <a href="index.php">Home</a>
                    </li>
                    <?php
                    if(isset($_SESSION["useruid"])){
                        echo "<li class='navitem'><a href='profile.php'>Your profile</a></li>";
                        echo "<li class='navitem'><a href='inc/logout.inc.php'>Log out</a></li>";
                    }
                    else{
                        echo "<li class='navitem'><a href='login.php'>Login</a></li>";
                        echo "<li class='navitem'><button class='btn-primary'><a href='signup.php'>Sign up</a></button></li>";
                    }
                    ?>
                </ul>
            </nav>
            </div>