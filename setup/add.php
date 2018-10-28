<?php

session_start();

$fname = $_POST['fname'];
$email = $_POST['email'];
$id = $_SESSION['id'];
$sql = "INSERT into newuser (fname, pid, email) VALUES ('$fname','$id','$email') ";
$conn = mysqli_connect("localhost","root","","pickup");
if(!mysqli_query($conn, $sql)){
    return false;
}else{
    header("location: ../setup/user.php");
}
?>