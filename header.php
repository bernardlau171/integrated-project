<?php
session_start();
include 'inc/dbh.inc.php';
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Job hunting site</title>
            <link rel="stylesheet" type="text/css" href="style.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            
            
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
                            $uid = $_SESSION["useruid"];
                            $sql = "SELECT userType FROM users where userUid = '$uid'";
                            $query = mysqli_query($conn, $sql);
                            if($query == "company"){
                                echo "<li class='navitem'><a href='companyindex.php'>Home</a></li>";
                            }
                            else if ($query == "individual"){
                                echo "<li class='navitem'><a href='index.php'>Home</a></li>";
                            }
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