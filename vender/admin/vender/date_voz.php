<?php
require 'connectDB.php';



$id = $_POST['id'];
$voz = $_POST['date_voz'];


    $date_voz = mysqli_query($db, "UPDATE `orders` SET `date_voz`='$voz' WHERE `id` = $id");

header("Location:".$_SERVER["HTTP_REFERER"]);