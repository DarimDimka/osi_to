<?php 
session_start();
require "connectdb.php";
$id_user = $_SESSION['users']['id'];
$comment = $_POST['comment'];
$date = date("Y-m-d H:i");


if( !empty($comment)){
    mysqli_query($link,"INSERT INTO `reviews`(`id`, `users_id`, `comment`, `date`) VALUES (NULL, '{$id_user}', '{$comment}', '{$date}')");
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}