<?php
if ($_SESSION['users']){
    $mysql_user = mysqli_query($link, "SELECT * FROM `users` WHERE `id` = {$_SESSION['users']['id']}");
$users = mysqli_fetch_assoc($mysql_user);
}
else {
    
}
$mysql_oborud = mysqli_query($link, "SELECT * FROM `oborud`");
?>
<link rel="stylesheet" href="../assets/css/contact/contact.css">

    <section class="about_us_area row" id="service">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Сервис</h2>
            </div>
            <div class="row about_row">
                <div class="contact-map">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A2b15ae29f685e2805f6c72815d7f91b6e27d10a86081ed47c1792f627adc3d45&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>    

        <div class="map-hover">
            <h5>3-Молодежная 18</h5>
            <ul>
                <li>ПН-ВС</li>
                <li>09:00 - 17:00</li>
            </ul>
            <i class="icon_pin"></i>
        </div>
            </div>
        </div>
    </section>

        
    </div>
<section class="all_contact_info" id="contact">
    <div class="container">
        <div class="row contact_row">
            <div class="col-sm-6 contact_info">
                <h2>Контакты</h2>
                <div class="location">
                    <div class="location_laft">
                        <p>Адрес</p>
                        <p>Телефон</p>
                        <p>E-mail</p>
                    </div>
                    <div class="address">
                        <p>г. Омск, ул. 3-я Молодежная, 18</p>
                        <p>+999 222</p>
                        <p>osi55@mail.ru</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 contact_info send_message">
                <h2>Оставить отзыв</h2>
                <?php if(empty($_SESSION['users'])) {?>
                            <a href="login.php" class="primary-btn f-btn">Чтобы оставить отзыв, авторизуйтесь</a>
                        <?php } else {?>
                            <input type="hidden" name="id" value="<?= $users['id'] ?>" /> 
                            <form action="./vender/reviews.php" method="POST">
                                <label>Фамилия</label>
                                <input type="text" class="form-control" placeholder="Фамилия" value="<?= $users['surname'] ?>" readonly>
                                <label>Имя</label>
                                <input type="text" class="form-control" placeholder="Имя" value="<?= $users['lastname'] ?>" readonly>
                                <label>Отзыв</label>
                                <textarea class="form-control " name="comment" placeholder="Отзыв"></textarea>
                                <button type="submit" name="submit" class="btn btn-default">Отправить</button>
                            </form> 
                        <?php } ?>
            </div>
        <?php
        $getcomment = mysqli_query($link, "SELECT `reviews`.*, `users`.`surname`, `users`.`lastname`
        FROM `reviews` 
            LEFT JOIN `users` ON `reviews`.`users_id` = `users`.`id`;");
        ?>
        </div>
        <div class="container">
            <hr/>
            <?php while ($comment = mysqli_fetch_assoc($getcomment)) {?>
            <div class="row">
                <div class="col-lg-8 offset-lg-1">
                    <p><?= $comment['date'] . " ({$comment['surname']} $comment[lastname]): " . $comment['comment']?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>