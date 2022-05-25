<?php
require 'connectdb.php';


$id = mysqli_real_escape_string($link,$_POST['id']);
$email = mysqli_real_escape_string($link,$_POST['email']);
$phone = mysqli_real_escape_string($link,$_POST['phone']);
$surname = mysqli_real_escape_string($link,$_POST['surname']);
$lastname = mysqli_real_escape_string($link,$_POST['lastname']);



    $userup = mysqli_query($link, "
UPDATE `users` SET 
                 `email`='$email',
                 `phone`='$phone',
                 `surname`='$surname',
                 `lastname`='$lastname'
WHERE `id` = $id
               ");

    header('Location: /');


