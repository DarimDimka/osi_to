<?php 
require 'connectDB.php';
$id = $_GET['id'];
//var_dump($_GET['status']);
// var_dump($_GET['id']);
if($_GET['status']==3){
    mysqli_query($db,"UPDATE `orders` SET `status` = 3 WHERE `id` = '$id'");
    header("Location:".$_SERVER["HTTP_REFERER"]);
}
if($_POST['submit']){
    mysqli_query($db,"DELETE FROM `orders` WHERE `id` = '$id'");
    header("Location:".$_SERVER["HTTP_REFERER"]);
    
}