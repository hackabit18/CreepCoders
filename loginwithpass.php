<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location: setup/user.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main2.css" />
    <script src="main.js"></script>
</head>
    <body>
    <div class="navbarClass">
        <h3><a href="#">PICKUP</a></h3>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Feedback</a></li>
            <li class="floatRight1"><a href="login.php">Log In</a></li>
            <li class="floatRight"><a href="signup.php">Sign Up</a></li>
        </ul>
    </div>
        <div class="loginWithPassContainer">
            <form action="login/login.php" method="post">
                <h1>Sign In</h1>
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Sign In">
            </form>
        </div>
    </body>
</html>