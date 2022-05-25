<?php
session_start();
require "./vender/connectDB.php";

?>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="./assets-admin/css/header/header.css">
    <link rel="stylesheet" href="./assets-admin/css/menu/menu.css">
    <link rel="stylesheet" href="./assets-admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets-admin/css/table/admin.css">
  </head>
    <body>
      
          <!-- header -->
                  <?php
                  require_once './header/header-admin.php';
                  ?>
          <!-- / header -->
<div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-lg-3 navbar-container bg-light">
                <nav class="navbar navbar-expand-md navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <!-- Вертикальное меню -->
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="?section=vid">Виды ТО</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?section=oborud">Оборудование</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?section=users">Исполнители</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?section=orders">Заявки</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?section=history">История заявок</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?section=rem">Сроки ремонта</a>
                            </li>
                                <div class="nav-link" href="?section=orderinfo"></div>    
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-xs-12 col-md-8 col-lg-9 content-container">
                <h1 class="h3 text-center mt-5">Панель управления</h1>
             
             <?php   
             $section = $_GET['section'];
                      if (!empty($section)) {
                          require "admin{$section}.php";
                      }
                      
                ?>
            </div>
        </div>
    </div>
    <script src="assets-admin/js/jquery-1.12.0.min.js"></script>
    <script src="assets-admin/js/bootstrap.min.js"></script>
    <script src="assets-admin/js/bootstrap.bundle.min.js"></script>
    </body>
</html>