<?php
session_start();
require './vender/connectDB.php';


$getOrder = mysqli_query($db, "SELECT * FROM `orders`");

$getOborud = mysqli_query($db, "SELECT * FROM `oborud`");
$oborud = mysqli_fetch_assoc($getOborud);
$mysql_orders = mysqli_query($db, "SELECT * FROM `orders` WHERE `id` = {$_GET['id']}");
$order = mysqli_fetch_assoc($mysql_orders);
$mysql_users = mysqli_query($db, "SELECT * FROM `users` WHERE `id` = {$order['users_id']}");
$users = mysqli_fetch_assoc($mysql_users);

$mysql_vid = mysqli_query($db,"SELECT * FROM `vid-to`");
$vid = mysqli_fetch_assoc($mysql_vid);

?>

<div class="container">
  <div class="col-xs-5"></div>
  <h2 class="mb-4">Информация о заявки</h2>
  <div class="table-responsive">
    <table class="table">
      <input type="hidden" name="id" value="<?= $users['id'] ?>" />
      <tr>
        <th>ID</th>
        <td><?= $order['id'] ?></td>
      </tr>
      <tr>
        <th>Фамилия</th>
        <td><?= $users['surname'] ?></td>
      </tr>
      <tr>
        <th>Имя</th>
        <td><?= $users['lastname'] ?></td>
      </tr>
      <tr>
        <th>Категория</th>
        <td><?= $oborud['name'] ?></td>
      </tr>
      <tr>
        <th>Причина</th>
        <td><?= $order['prichina'] ?></td>
      </tr>
      <tr>
        <th>Дата</th>
        <td><?= $order['date'] ?></td>
      </tr>
      <tr>
        <th>Адрес</th>
        <td><?= $order['address'] ?></td>
      </tr>
      <tr>
        <th>Телефон</th>
        <td><?= $order['phone'] ?></td>
      </tr>
      <tr>
        <th>Дата выезда:</th>
        <td><?= $order['date_voz'] ?></td>
      </tr>
      <tr>
        <th>Вид ТО:</th>
        <td><?= $vid['status']?></td>
      </tr>
    </table>
  </div>
</div>