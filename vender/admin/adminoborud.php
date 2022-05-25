<?php
session_start();
require './vender/connectDB.php';
$getOborud = mysqli_query($db, "SELECT * FROM `oborud` WHERE `id`");

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

    <div class="container">
        <h2 class="mb-4">Список оборудования</h2>
        <div class="table-responsive">
            <?php while ($oborud = mysqli_fetch_assoc($getOborud)) { ?>
        
            <table class="table border: 5px">
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Статус</th>
                </tr>
                <tr>
                    <td><?= $oborud['id'] ?></td>
                    <td><?= $oborud['name'] ?></td>
                    <td><?php switch ($oborud['status']) {
                            case 1:
                                echo "<small class='text-primary'>В работе</small>";
                                break;
                            case 0:
                                echo "<small class='text-danger'>Не работает</small>";
                                break;
                        } ?></td>
                    <td>
                        <a href="./vender/AdminOborudAction.php?status=0&id=<?= $oborud['id'] ?>" role="button" class="btn btn-danger">Отключить</a>
                        <a href="./vender/AdminOborudAction.php?status=1&id=<?= $oborud['id'] ?>" role="button" class="btn btn-success">Включить</a>
                        <a href="./vender/delete_oborud.php?delete&id=<?= $oborud['id'] ?>" role="button" class="btn btn-danger">Удалить</a>
                    </td>
                </tr>
            </table>
       
        <?php } ?> 
    </div>
        <button id="openmodal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Добавить оборудования</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Добавление</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./vender/add_oborud.php" method="POST">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Название</label>
                                <input type="text" name='name' class="form-control" id="recipient-name">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      
        <script>

            $(document).ready(function() {
                $("#openmodal").click(function() {
                    $("#exampleModal").modal('show');
                    
                })
                

            })
        </script>
</body>

</html>