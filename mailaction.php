<?php
session_start();
require "vender/connectdb.php";
$mysql_order = mysqli_query($link, "SELECT * FROM `orders`");
$order = mysqli_fetch_assoc($mysql_order);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
 
// Для более ранних версий PHPMailer
//require_once '/PHPMailer/PHPMailerAutoload.php';
 
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
 
// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;
 
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->Username = 'dimashishlovshishlov@yandex.ru';
$mail->Password = 'QWErtyuiop123456789';
 
// От кого
$mail->setFrom('dimashishlovshishlov@yandex.ru', "{$_SESSION['users']['lastname']} {$_SESSION['users']['surname']}");    
 
// Кому
$mail->addAddress('dimashishlovshishlov@yandex.ru', 'Дмитрий Шишлов');
$mail->addReplyTo('dimashishlovshishlov@yandex.ru', "{$_SESSION['users']['lastname']} {$_SESSION['users']['surname']}");
 
// Тема письма
$mail->Subject = $subject;
 
// Тело письма
$body = '
<h1>Здравствуйте' . $_SESSION['users']['lastname'] . $_SESSION['users']['surname'] . '(Иван Иванов)!</h1>
<p>
    Уважаемый покупатель, заказ принят и ему присвоен номер <strong>'. $order['id'] . '(1953)</strong>.
    <br />Используйте этот номер для уточнения заказа.
    <br />Пожалуйста проверьте информацию ниже и в случае ошибки свяжитесь с нами.
</p>
<ul>
    <li><strong>Имя:</strong>'. $_SESSION['users']['lastname'] . $_SESSION['users']['surname'] . '(Иван Иванов)</li>
    <li><strong>E-mail:</strong>' . $_SESSION['users']['email'] .'</li>
</ul>
<h2>Данные о товарах:</h2>
<table>
    <thead>
        <tr>
            <th>№</th>
            <th>Наименование товара</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Сумма</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">1</td>
            <td>
                Настенный газовый котел Buderus Logamax U072-12K 7736900359RU
                <br>Артикул: 7736900359RU
            </td>
            <td style="text-align: center;">2 шт.</td>
            <td style="text-align: center;">30 0000 руб.</td>
            <td style="text-align: center;">60 0000 руб.</td>
        </tr>
    </tbody>
</table>
<h4>ИТОГО: 60 0000 руб.</h4>
<hr>
<p>
    С уважением, Site.com
    <br><a href="http://site.com">http://site.com</a>
</p>
';
$mail->msgHTML($body);
 
$mail->send();