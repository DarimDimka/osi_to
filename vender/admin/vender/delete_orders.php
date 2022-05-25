<?php
require "connectDB.php";
session_start();
$id = $_GET['id'];
$name = $_POST['name'];


    $delete_orders = mysqli_query(
        $db, "DELETE FROM `orders` WHERE `id` = '$id'"
    );
    header("Location: " . $_SERVER["HTTP_REFERER"]);