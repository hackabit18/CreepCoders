<?php 
session_start();
include "image.compare.class.php";

$sql = "SELECT url from login where id=1";
$conn = new mysqli("localhost", "root", "", "pickup");
$results = $conn->query($sql);
$rows = $results->fetch_assoc();

$sql = "SELECT * from snapshot";
$results2 = $conn->query($sql);


$ob = new compareImages;
$image1 = $rows['url'];

$small = 9999;
$id="";
$rows2="";

if($results2->num_rows == 1){
    $rows2 = $results2->fetch_assoc();
    $image2 = "../".$rows2['url'];
    if($ob->compare($image1, $image2)<=15){
        $error = $ob->compare($image1, $image2);
        $id = $rows2['id'];
    }
}

$_SESSION['id'] = $id;

header("location: ../setup/user.php?error=$error");

?>