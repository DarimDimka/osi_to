<?php
// Локалка
$hostname = "127.0.0.1";
$username = "root";
$userpassword = "root";
$database ="osi";


// Хостинг
// $hostname = "127.0.0.1";
// $username = "to_to";
// $userpassword = "MHhdu3t9awAk6Nc4";
// $database = "to_osi";



$link = mysqli_connect($hostname,$username,$userpassword,$database);

if(!$link){

    echo "подключение отсутствует!";
}





