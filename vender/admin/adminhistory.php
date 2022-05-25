<?php
session_start();
require './vender/connectDB.php';
$getOrders = mysqli_query($db, "SELECT `orders`.*, `users`.`login`
  FROM `orders` 
    LEFT JOIN `users` ON `orders`.`users_id` = `users`.`id` WHERE `status` = 2");

$getOborud = mysqli_query($db, "SELECT * FROM `oborud`");
$oborud = mysqli_fetch_assoc($getOborud);

?>

<div class="container">
    <div class="col-xs-5"></div>
    <h2 class="mb-4">История заявок</h2>
    <div class="table-responsive">

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
                    <td><input type="date" name="date" value="<?= $order['date'] ?>" readonly></td>
                    <td><?= $order['address'] ?></td>
                    <td><?= $order['phone'] ?></td>
                    <td>
                        <input type="hidden" name="id" value="<?= $order['id'] ?>" />
                        <input type="date" name="date_voz" value="<?= $order['date_voz'] ?>" readonly>
                    </td>

                    <td><?php switch ($order['status']) {
                            case 2:
                                echo "<small class='text-danger'>Заявка завершена</small>";
                                break;
                                //   case 1:
                                //     echo "<a href='?section=orderinfo&id={$order["id"]}' small class='text-success'>Заявка в работе</small>";
                                //     break;
                                //   case 0:
                                //     echo "<small class='text-primary'>Заявка обрабатывается</small>";
                                //     break;
                        } ?>
                    </td>
                    <td>
                        <a href="vender/AdminHistoryAction.php?status=3&id=<?= $order['id'] ?>" role="button" class="btn btn-primary">Вернуть</a>
                        <a href="./vender/delete_orders.php?submit&id=<?= $order['id'] ?>" name="submit" role="button" class="btn btn-danger">Удалить</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>