<?php
$title = "Профиль";
require_once "./vender/beginPage.php";
$mysql_user = mysqli_query($link, "SELECT * FROM `users` WHERE `id` = {$_SESSION['users']['id']}");
$users = mysqli_fetch_assoc($mysql_user);
$mysql_oborud = mysqli_query($link, "SELECT * FROM `oborud`");
$oborud = mysqli_fetch_assoc($mysql_oborud);
$mysql_orders = mysqli_query($link, "SELECT * FROM `orders`");
$orders = mysqli_fetch_assoc($mysql_orders);
?>
<link rel="stylesheet" type="text/css" href="assets/css/account/account.css">


    <div class="container">
        <?php require_once "vender/account-info.php" ?>
        <hr>
        <!-- Оформленные заявки  -->
        <?php require_once "./vender/oform_orders.php"; ?>
    </div>
<div class="account"></div>
<?php require_once "./vender/endPage.php";?>
<script> $(document).ready(function(){
    $("#phone").inputmask("+7 (999) 999-9999");
})</script>

