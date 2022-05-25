<?php

session_start();
require './vender/connectDB.php';
$getUser = mysqli_query($db, "SELECT * FROM `users`");

$job = [
  0 => 'Пользователь',
  1 => 'Мастер',
  2 => 'Админ'
];

?>


<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Template</title>
  <link rel="stylesheet" href="./assets-admin/css/bootstrap.min.css">
</head>

<body>

  <!-- header -->
  <?php
  require_once './header/header-admin.php';
  ?>
  <!-- / header -->

  <div class="container pt-5">
    <h2 class="mb-4">Список пользователей</h2>
    <div class="table-responsive">
<?php while ($user = mysqli_fetch_assoc($getUser)) { ?>
      
    <table class="table border: 2px" >
      <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Email</th>
        <th>Телефон</th>
        <th>Должность</th>
        <th>Логин</th>
        <th>Пароль</th>
        <th>Статус</th>
        <th>Действия</th>
        
      </tr>
      <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['lastname'] ?></td>
        <td><?= $user['surname'] ?></td>
        <td><?= $user['email'] ?></td>
        <td><?= $user['phone']?></td>
        <td><?= $job[$user['flag']]?></td>
        <td><?= $user['login']?></td>
        <td><?= $user['password']?></td>
        <td><?php switch ($user['flag']) {
          case 0:
            echo "<small class='text-primary'>Пользователь</small>";
            break;
          case 1:
            echo "<small class='text-success'>Мастер</small>";
            break;
          case 2:
            echo "<small class='text-danger'>Админ</small>";
            break;
        } ?></td>
        <td>
        <a href="./vender/AdminUserAction.php?flag=0&id=<?= $user['id'] ?>" role="button" class="btn btn-primary">Пользователь</a>
          <a href="./vender/AdminUserAction.php?flag=1&id=<?= $user['id'] ?>" role="button" class="btn btn-success">Мастер</a>
          <a href="./vender/AdminUserAction.php?flag=2&id=<?= $user['id'] ?>" role="button" class="btn btn-danger">Админ</a>
        </td>
      </tr>
      </table>
      <?php } ?>
      
    </div>
    
  </div>

</body>

</html>