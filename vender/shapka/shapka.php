<?php
if ($_SESSION['users']) { ?>

    <section class="slider_area row m0">
        <div class="slider_inner">
            <div data-thumb="images/slider-1.jpg" data-src="images/slider-1.jpg">
                <div class="camera_caption">
                    <div class="container">
                        <h5 class=" wow fadeInUp animated">Добро пожаловать</h5>
                        <h4 class=" wow fadeInUp animated" data-wow-delay="0.2s">Чтобы оставить заявку, заполните форму</h4>
                        <h4 class=" wow fadeInUp animated" data-wow-delay="0.2s"></h4>
                        <a class=" wow fadeInUp animated" data-wow-delay="0.2s" href="../orders.php">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div data-thumb="images/slider-2.jpg" data-src="images/slider-2.jpg">
                <div class="camera_caption">
                    <div class="container">
                        <h5 class=" wow fadeInUp animated">Добро пожаловать</h5>
                        <h4 class=" wow fadeInUp animated" data-wow-delay="0.2s">Чтобы оставить заявку, заполните форму</h4>
                        <h4 class=" wow fadeInUp animated" data-wow-delay="0.2s"></h4>
                        <a class=" wow fadeInUp animated" data-wow-delay="0.2s" href="#">Оставить заявку</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php } 

else { ?>

<section class="slider_area row m0">
        <div class="slider_inner">
            <div data-thumb="images/slider-1.jpg" data-src="images/slider-1.jpg">
                <div class="camera_caption">
                    <div class="container">
                        <h5 class=" wow fadeInUp animated">Добро пожаловать</h5>
                        <h4 class=" wow fadeInUp animated" data-wow-delay="0.5s">Для того чтобы оставить заявку на обслуживание нужно АВТОРИЗИРОВАТЬСЯ</h4>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="../login.php">Войти</a>
                    </div>
                </div>
            </div>
            <div data-thumb="images/slider-2.jpg" data-src="images/slider-2.jpg">
                <div class="camera_caption">
                    <div class="container">
                        <h5 class=" wow fadeInUp animated">Добро пожаловать</h5>
                        <h4 class=" wow fadeInUp animated" data-wow-delay="0.5s">Для того чтобы оставить заявку на обслуживание нужно АВТОРИЗИРОВАТЬСЯ</h3>
                            <a class=" wow fadeInUp animated" data-wow-delay="1s" href="../login.php">Войти</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>