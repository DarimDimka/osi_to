<table class="table">
      <tr>
        <th>ID</th>

        <th>Фамилия</th>
        <th>Имя</th>
        <th>Категория</th>
        <th>Причина</th>
        <th>Дата</th>
        <th>Адрес</th>
        <th>Телефон</th>
        <th>Дата выезда</th>
        <th>Статус</th>
        <th>Комментарий</th>

      </tr>
      <?php while ($order = mysqli_fetch_assoc($getOrder)) { ?>
        <tr>
          <td><?= $order['id'] ?></td>
          <td><?= $users['surname'] ?></td>
          <td><?= $users['lastname'] ?></td>
          <td><?= $oborud['name'] ?></td>
          <td><?= $order['prichina'] ?></td>
          <td><?= $order['date'] ?></td>
          <td><?= $order['address'] ?></td>
          <td><?= $order['phone'] ?></td>
          <td><input  value="<?= $order['date_voz'] ?>" readonly /></td>
          <td><?php switch ($order['status']) {
                case 2:
                  echo "<small class='text-danger'>Заявка завершена</small>";
                  break;
                case 1:
                  echo "<small class='text-success'>Заявка в работе</small>";
                  break;
                case 0:
                  echo "<small class='text-primary'>Заявка обрабатывается</small>";
                  break;
              } ?>
          </td>
          <td>
          <form action="vender/add_comment.php" method="post">
        <input type="hidden" name="id" value="<?=$comment['id']?>">
        <div class="row">
        <div class="col-lg-3">
                <label>Пользователь</label>
            </div>
            <div class="col-lg-9">
            <select name="id_users">
                <?php while ($users = mysqli_fetch_assoc($mysql_users)) {?>
                    <option value="<?= $users['id']?>" >
                        <?= $users['name']?>
                    </option>
                <?php } ?>
            </select>
            </div>
            <div class="col-lg-9">
                <input  type="text" name="comment" value="<?=$comment['comment']?>">
            </div>
            <div class="col-lg-9">
              <a class='btn btn-primary' href='?section=comment&mode=add'>Добавить</a>
            </div>
        </div>
    </form>
          </td>
        </tr>
      <?php } ?>
      </tr>
    </table>