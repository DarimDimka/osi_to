
    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6">
                    <img src="../assets/img/index/logo_osi.svg" width="150px" alt="">
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Социальный сети</h2>
                    <ul class="socail_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Переходы</h2>
                    <ul class="quick_link">
                        <li><a href="./index.php"><i class="fa fa-chevron-right"></i>Главная</a></li>
                        <li><a href="#service"><i class="fa fa-chevron-right"></i>Cервисы</a></li>
                        <? if (!empty($_SESSION['users'])) { ?>
                            <li><a href="./orders.php"><i class="fa fa-chevron-right"></i>Оставить заявку</a></li><?php } ?>
                        <li><a href="#contact"><i class="fa fa-chevron-right"></i>Контакты</a></li>
                        <? if (!empty($_SESSION['users'])) { ?>
                            <li><a href="./account.php"><i class="fa fa-chevron-right"></i>Настройки профиля</a></li><?php } ?>
                        <? if (!empty($_SESSION['users']['flag'] == 1)) { ?>
                            <li><a href="./vender/admin/admin.php"><i class="fa fa-chevron-right"></i>Админ панель</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Контактактная информация</h2>
                    <address>
                        <p>У вас есть вопросы или комментарии свяжетесь с нами:</p>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>osi55@mail.ru</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>999-222</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>г.Омск, ул. 3-Молодежная, 18</a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
    </footer>
