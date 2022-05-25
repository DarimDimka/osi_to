<?php
require "connectdb.php";
session_start();
if (!isset($title)) {
    $title = "Техническое обслуживание ОСИ";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/animate/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/vendors/camera-slider/camera.css">
    <link rel="stylesheet" type="text/css" href="/vendors/owl_carousel/owl.carousel.css" media="all">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/assets/css/auto/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all" />
</head>
<body>
<!-- Preloader -->
<!-- <div class="preloader"></div> -->
<?php
if(!empty($_SESSION['users'])){?>

    <!-- header вход выполнен -->
    <section class="top_header_area">
        <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>999-222</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>osi55@mail.ru</a></li>
                <li><a href="#"><i class="fa fa-clock-o"></i>Пн - Вс 09:00 - 17:00</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </section>
    
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- Поиск -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Введите текст и нажмите ENTER">
                        <span class="input-group-addon form_hide"><i class="fa fa-arrow-up"></i></span>
                    </div>
                </form>
            </div>
            <!-- /Поиск -->
            <div class="col-md-3 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php"><img class="img-responsive" src="../assets/img/index/logo.png" alt=""></a>
                </div>
            </div>

            <div class="col-md-9 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./index.php">Главная</a></li>
                        <li><a href="../index.php#service">Cервисы</a></li>
                        <li><a href="../orders.php">Оставить заявку</a></li>
                        <li><a href="../index.php#contact">Контакты</a></li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Аккаунт</a>
                            <ul class="dropdown-menu">
                                <li><a href="../account.php">Настройки профиля</a></li>
                                <li><a href="../vender/exit.php">Выйти</a></li>
                                <?php if ($_SESSION['users']['flag'] > 0) {?>
                                    <li><a href="/vender/admin/admin.php">Админ-панель</a></li>
                                <?php }?>

                            </ul>
                        </li>
                        <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- /header -->

<?php } else {?>

    <!-- header вход НЕ выполнен -->
    <section class="top_header_area">
        <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>999-222</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>osi55@mail.ru</a></li>
                <li><a href="#"><i class="fa fa-clock-o"></i>Пн - Вс 09:00 - 17:00</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </section>


    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- Поиск -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Введите текст и нажмите ENTER">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div>
            <!-- /Поиск -->
            <div class="col-md-3 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php"><img src="../assets/img/index/logo.png" alt=""></a>
                </div>
            </div>

            <div class="col-md-9 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./index.php">Главная</a></li>
                        <li><a href="../index.php#service">Cервисы</a></li>
                        <li class="dropdown submenu">
                        <li><a href="../index.php#contact">Контакты</a></li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Вход</a>
                            <ul class="dropdown-menu">
                                <li><a href="../login.php">Вход в личный кабинет</a></li>
                                <li><a href="../reg.php">Регистрация</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- /header -->

<?php }?>
