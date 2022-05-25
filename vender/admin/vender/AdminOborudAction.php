<?php 
require 'connectDB.php';
$id = $_GET['id'];


if($_GET['status']==1){
    mysqli_query($db,"UPDATE `oborud` SET `status` = 1 WHERE `id` = '$id'");
    header("Location:".$_SERVER["HTTP_REFERER"]);
}
if($_GET['status']==0){
    mysqli_query($db,"UPDATE `oborud` SET  `status` = 0 WHERE `id` = '$id'");
    header("Location:".$_SERVER["HTTP_REFERER"]);
}
?>