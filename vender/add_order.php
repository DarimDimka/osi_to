<?php
require "connectdb.php";
session_start();
$id_users = $_SESSION['users']['id'];
$id_oborud = $_POST['id_oborud'];
$prichina = $_POST['prichina'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$date = date('Y-m-d');


    $add_orders = mysqli_query(
        $link,
        "INSERT INTO `orders`(`id`,`users_id`, `id_oborud`, `prichina`, `date`, `address`, `phone`, `date_voz`,`status`) 
            VALUES (
                NULL,
                '$id_users',
                '$id_oborud',
                '$prichina',
                '$date',
                '$address',
                '$phone',
                NULL,
                0
                )"
    );
 header("Location: /");