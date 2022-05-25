<?php
require_once "./vender/beginPage.php";
?>

<section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Cтраница не найдена</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Главная</a></li>
            <li><a href="#" class="active">404</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Not Found area -->
    <section class="not_found_area">
        <h2>Страница не найдена</h2>
        <p>Данная страница времмено не доступна.</p>
        <h1>404</h1>
        <form action="#" class="search_error">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <a href="#"><i class="fa fa-search"></i> </a>
        </form>
    </section>
<? 
require_once "footer.php";
require_once "./vender/endPage.php";
