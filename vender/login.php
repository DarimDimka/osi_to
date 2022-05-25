<?php
session_start();
require "connectdb.php";

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];




if (isset($_POST['submit'])) {
    $loginusers = mysqli_query($link, "SELECT * FROM `users` 
    WHERE (`login` = '$login' OR `email` = '$email') AND `password` = '$password'");

    if (mysqli_num_rows($loginusers) > 0) {
        $user = mysqli_fetch_assoc($loginusers);

        $_SESSION['users'] = [
            'id' => $user['id'],
            'login' => $user['login'],
            'email' => $user['email'],
            'password' => $user['password'],
            'flag' => $user['flag'],
            'surname' => $user['surname'],
            'lastname' => $user['lastname']

        ];
        header("location: ../index.php");
    } 
    else {
        $_SESSION["message"] = "Неверный логин или пароль";
        header("location: ../login.php");
    }
}
