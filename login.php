<?php
$title = "Авторизация";
require_once "./vender/beginPage.php"; 
?>


<link rel="stylesheet" href="assets/css/auto/reg.css">
<div class="container">
    <div class="row">
        <div class="col-xs-12 forma">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                    <img class="brandimg img-responsive zoomIn" src="./assets/img/index/logo_osi.svg" />
                </div>
            </div>
            <div class="row forma-input margin-top-20px">
                <form action="vender/login.php" method="POST">
                    <input type="hidden" name="" value="">
                    <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                        <div class="form-group">
                            <label class="control-label block">Логин</label>
                            <input class="form-control" type="text" name="login" placeholder="Введите логин" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                        <div class="form-group">
                            <label class="control-label">Пароль</label>
                            <input class="form-control" type="password" name="password" placeholder="Введите пароль" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Авторизоваться</button>
                        </div>
                    </div>

                </form>
                <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                    <div class="form-group">
                        <a href='/reg.php'>Зарегистрироваться</a>   
                    </div>
                  
                    <?php
                    if ($_SESSION["message"]) {
                        $alert = $_SESSION["message"];
                        echo "<p style = 'color:red;'> $alert</p>";
                    }
                    unset($_SESSION["message"]);
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>
<!--end container-->
<?php require_once "./vender/endPage.php";
