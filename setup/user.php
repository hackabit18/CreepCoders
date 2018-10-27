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
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <link rel="stylesheet" href="../main2.css">     

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

    <div class="tasks-container">
        <div class="row">
            <div class="profile-card">
                <div class="profile-image">
                    <img src="../<?php 
                        $conn = new mysqli("localhost", "root", "","pickup");
                        if(!$conn->connect_error){
                            $id = $_SESSION['id'];
                            $sql = "SELECT url from snapshot WHERE id='$id' ";
                            $results1 = $conn->query($sql);
                            $rows1= $results1->fetch_assoc();
                            echo $rows1['url'];
                        }
                    ?>" alt="" title="profile">
                </div>
                <?php
                echo "<h1 style=color:white;font-family:Arial;color:grey;font-size:25px;font-weight: normal;>".$rows['fname']."</h1>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>