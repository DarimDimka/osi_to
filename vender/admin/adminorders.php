<?php

require './vender/connectDB.php';
$getOrders = mysqli_query($db, "SELECT `orders`.*, `users`.`login`
  FROM `orders` 
    LEFT JOIN `users` ON `orders`.`users_id` = `users`.`id` WHERE `status` = 1 OR `status` = 0 OR `status` = 3");
$getOborud = mysqli_query($db, "SELECT * FROM `oborud`");
$oborud = mysqli_fetch_assoc($getOborud);

?>

<div class="container">
  <div class="col-xs-5"></div>
  <h2 class="mb-4">Список заявок</h2>
  <div class="table-responsive">
    <table>
      <tr>
        

      </tr>
    </table>
    <table class="table">
      <tr>
        <th>ID</th>
        <th>Пользователь</th>
        <th>Категория</th>
        <th>Причина</th>
        <th>Дата</th>
        <th>Адрес</th>
        <th>Телефон</th>
        <th>Дата выезда</th>
        <th>Статус</th>
        <th>Действия</th>
      </tr>
      <?php while ($order = mysqli_fetch_assoc($getOrders)) { ?>
        <tr>
          <td><?= $order['id'] ?></td>
          <td><?= $order['users_id'] ?></td>
          <td><?= $oborud['name'] ?></td>
          <td><?= $order['prichina'] ?></td>
          <td><input type="date" value="<?= $order['date'] ?>" readonly /></td>
          <td><?= $order['address'] ?></td>
          <td><?= $order['phone'] ?></td>
          <td>
            <form action="/vender/admin/vender/date_voz.php" method="POST">
              <input type="hidden" name="id" value="<?= $order['id'] ?>" />
              <input type="date" name="date_voz" value="<?= $order['date_voz'] ?>">
              <button class="btn btn-success" name="submit" type="submit">Сохранить</button>
            </form>
          </td>

          <td><?php switch ($order['status']) {
                case 3:
                  echo "<a href='#' small class='text-danger'>Вернули на доработку</small>";
                  break;
                case 2:
                  echo "<small class='text-danger'>Заявка завершена</small>";
                  break;
                case 1:
                  echo "<a href='?section=orderinfo&id={$order["id"]}' small class='text-success'>Заявка в работе</small>";
                  break;
                case 0:
                  echo "<small class='text-primary'>Заявка обрабатывается</small>";
                  break;
              } ?>
          </td>
          <td>
            <a href="vender/AdminOrderAction.php?status=0&id=<?= $order['id'] ?>" role="button" class="btn btn-primary">Обработка</a>
            <a href="vender/AdminOrderAction.php?status=1&id=<?= $order['id'] ?>" role="button" class="btn btn-success">В работу</a>
            <a href="vender/AdminOrderAction.php?status=2&id=<?= $order['id'] ?>" role="button" class="btn btn-danger">Завешить</a>
          </td>
        </tr>
      <?php } ?>
      </tr>
    </table>
  </div>
</div>
<script src="./assets-admin/js/search/search.js"></script>