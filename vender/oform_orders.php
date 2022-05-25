<?php
$status = [
    0 => 'Обработка',
    1 => 'В работе',
    2 => 'Завершенно'
];


$user = $_SESSION['users']['id'];
if (!$user) {
    header('Location:/index.php');
} else {
    $getOrder = mysqli_query($link, "SELECT * FROM `orders` WHERE `users_id` = '$user'");
    $mysql_vid = mysqli_query($link, "SELECT * FROM `vid-to`");
    $vid = mysqli_fetch_assoc($mysql_vid);
}
?>


<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="text-center">Ваши заявки</h4>
</div>

<?php while ($order = mysqli_fetch_assoc($getOrder)) { ?>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="margin-top-30px">
                    <div class="col-md-12">
                        <input type="hidden" name="id" value="<?= $users['id'] ?>" />
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label class="labels">Номер заявки</label>
                                <input type="text" class="form-control" value="<?= $order['id'] ?>" readonly>
                            </div>
                            <div class="col-md-5">
                                <label class="labels">Статус</label>
                                <input type="text" class="form-control" name="status" value="<?= $status[$order['status']] ?>" readonly>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Дата выезда</label>
                                <input   class="form-control" value="<?= $order['date_voz'] ?>" type="date" name="date_voz" readonly>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Вид ТО</label>
                                <input type="text" class="form-control" name="name" value="<?= $vid['name']?>" readonly>
                            </div>
                            <!-- <div class="col-md-12">
                                <label class="labels">Комментарий</label>
                                <input type="number" class="form-control" value="<?= $comment['comment'] ?> " readonly>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="mt-5 text-center"><button class="btn btn-primary profile-button" name="submit" type="submit">Сохранить</button></div> -->
                </div>
            </div>
        </div>
    </div>
<?php } ?>