<?php
require "connectDB.php";
session_start();
$id = $_GET['id'];
$name = $_POST['name'];


    $delete_oborud = mysqli_query(
        $db, "DELETE FROM `vid-to` WHERE `id` = '$id'"
    );
    header("Location: " . $_SERVER["HTTP_REFERER"]);