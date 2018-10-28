<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("location: ../?loggedout");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account Settings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <link rel="stylesheet" href="../css/main3.css">     

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        .profile-image img{
            display:block;
            height: 150px;
            width: 150px;
            border-radius: 100%;
        }
    </style>
</head>
<body>
    <div class="navbarClass">
        <h3><a href="#">PICKUP</a></h3>
        <ul>
            <?php
            if(!isset($_SESSION['id'])){
                ?>
                <li class="floatRight1"><a href="login.php">Log In</a></li>
                <li class="floatRight"><a href="signup.php">Sign Up</a></li>
                <?php
            }else{
                $conn = new mysqli("localhost", "root", "","pickup");
                if($conn->connect_error){
                    header("location: ../?error=Database error");
                    exit;
                }else{
                    $id = $_SESSION['id'];
                    $sql = "SELECT fname from userinfo WHERE id = '$id' ";
                    $results = $conn->query($sql);
                    $rows = $results->fetch_assoc();
                    ?>
                    <li class="floatRight1" title="LOGOUT"><a href="../logout/logout.php" style="color:#fff;title=logout">
                        <?php echo $rows['fname']; ?> - <span style="text-transform: initial;">Logout</span>
                    </a></li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
    <?php

        $conn = new mysqli("localhost", "root", "","pickup");
        $id = $_SESSION['id'];
        $sql = "SELECT *from userinfo WHERE id = '$id' ";
        $results = $conn->query($sql);
        $rows = $results->fetch_assoc();
        
    ?>
    <div class="dasboardContainer">
        <div class="leftpaneContainer">
            <div class="leftpane">
                <img src="<?php 
                    $myquery = "SELECT url from snapshot where id= '$id' ";
                    $myresults = $conn->query($myquery);
                    $myrows = $myresults->fetch_assoc();
                    echo "../".$myrows['url'];
                ?>" alt="">
                <h3><?php echo $rows['fname'];  ?></h3>
                <p><?php echo $rows['email'];  ?></p>
                <p><?php echo $rows['vno'];  ?></p>
                <p><?php echo $rows['pid'];  ?></p>
                <form action="">
                    <input type="submit" name="" value="Add User" id="adduser">
                    <input type="submit" name="" value="Remove User">
                </form>
            </div>
        </div>
        <div class="rightpaneContainer">
            <div class="rightpane">
                <?php
                    $conn = new mysqli("localhost","root","","pickup");
                    $sql = "select * from newuser";
                    $results = $conn->query($sql);
                    while($rows = $results->fetch_assoc()){
                        ?>
                        <div style="color:white;text-align:Center;">
                            <p><?php echo $rows['fname']; ?></p>
                            <p><?php echo $rows['email']; ?></p>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="addUserContainer" id="newuser" style="display:none">
        <form action="add.php" method="post">
            <input type="name" name="fname" class="customisedInput" placeholder="Enter Name">
            <input type="text" name="email" class="customisedInput" placeholder="Enter Email-ID">
            
            <input type="submit" name="" class="customisedInput" value="Submit">
            <input type="submit" name="" class="customisedInput" value="Close" id="close">
        </form>
    </div>
    <script type="text/javascript">
        

        let close = document.getElementById('close');
        console.log(close);
        close.addEventListener('click', function(e){
            e.preventDefault();
            document.getElementById('newuser').style.display="none";
        })
        document.getElementById('adduser').addEventListener('click', function(e){
            e.preventDefault()
            document.getElementById('newuser').style.display="block";
        })
    </script>
</body>
</html>