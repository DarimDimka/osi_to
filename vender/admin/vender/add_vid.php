<?php
require "connectDB.php";
session_start();
$name = $_POST['name'];


    $add_vid = mysqli_query(
        $db,
        "INSERT INTO `vid-to`(`id`,`name`,`status`) 
            VALUES (
                NULL,
                '$name',
                0
                )"
    );
    header("Location: " . $_SERVER["HTTP_REFERER"]);