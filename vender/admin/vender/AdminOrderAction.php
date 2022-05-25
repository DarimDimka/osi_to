<?php 
require 'connectDB.php';
$id = $_GET['id'];
//var_dump($_GET['status']);
// var_dump($_GET['id']);
if($_GET['status']==2){
    mysqli_query($db,"UPDATE `orders` SET `status` = 2 WHERE `id` = '$id'");
    header("Location:".$_SERVER["HTTP_REFERER"]);
}
if($_GET['status']==1){
    mysqli_query($db,"UPDATE `orders` SET  `status` = 1 WHERE `id` = '$id'");
    header("Location:".$_SERVER["HTTP_REFERER"]);
}
if($_GET['status']==0){
    mysqli_query($db,"UPDATE `orders` SET  `status` = 0 WHERE `id` = '$id'");
    header("Location:".$_SERVER["HTTP_REFERER"]);
}



?>