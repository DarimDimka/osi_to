<?php
session_start();
require "connectdb.php";
$surname = $_POST['surname'];
$lastname = $_POST['lastname'];
$login = $_POST['login'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confpassword = $_POST['password'];

if (isset($_POST['submit'])) {
    $checkuser = mysqli_query($link, "SELECT `login` FROM `users` WHERE `login` = '$login'");
    if (mysqli_num_rows($checkuser) > 0) {
        $_SESSION["message"] = "Пользователь с таким логином уже существует";
        header("location: " . $_SERVER["HTTP_REFERER"]);
    }
    else if ($password !== $confpassword) {
        $_SESSION["message"] = "пароли не совпадают";
        header("location: " . $_SERVER["HTTP_REFERER"]);
        
    } else {

        $addusers = mysqli_query($link, 
        "INSERT INTO `users`(`id`,`login`, `password`, `email`, `phone`, `flag`, `surname`, `lastname`) 
        VALUES (NULL, '$login', '$password', '$email', '$phone',0, '$surname', '$lastname')"); 
        header("Location: /index.php?reg-action=1");
    }
}
