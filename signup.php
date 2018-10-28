<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location: setup/user.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main2.css" />
    <script src="main.js"></script>
    <script type="text/javascript" src="DCSResources/dynamsoft.webcam.config.js"> </script>
    <script type="text/javascript" src="DCSResources/dynamsoft.webcam.initiate.js"> </script>
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
    
    <div class="signupMainContainer">
        <div class="signupImage">
            <div class="imageFrame" id="camera">

            </div>
        </div>
        <div class="signupContainer">
            <form action="signup/signup.php" method="post">
                <h1>Sign Up</h1>
                <input type="text" name="fname" placeholder="Full Name">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="cnf" placeholder="Confirm Password">
                <input type="text" name="vno" placeholder="Vehicle Number">
                <input type="text" name="pid" placeholder="Product ID">
                <input type="submit" name="submit" value="Sign Up" id='take_snapshots'>
            </form>
        </div>
    </div>

        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
        <script>
            var options = {
            shutter_ogg_url: "jpeg_camera/shutter.ogg",
            shutter_mp3_url: "jpeg_camera/shutter.mp3",
            swf_url: "jpeg_camera/jpeg_camera.swf",
            };
            var camera = new JpegCamera("#camera", options);
        
        $('#take_snapshots').click(function(){
            var snapshot = camera.capture();
            snapshot.show();
            
            snapshot.upload({api_url: "action.php"}).done(function(response) {
        $('#imagelist').prepend("<tr><td><img src='"+response+"' width='100px' height='100px'></td><td>"+response+"</td></tr>");
        }).fail(function(response) {
        alert("Upload failed with status " + response);
        });
        })

        function done(){
            $('#snapshots').html("uploaded");
        }
        </script>


    </body>
</html>