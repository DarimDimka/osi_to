<?php
$title = "Регистрация";
require_once "./vender/beginPage.php";

if (
    isset($_POST['lastname']) &&
    $_POST['surname'] &&
    $_POST['email'] &&
    $_POST['phone'] &&
    $_POST['login'] &&
    $_POST['password'] &&
    $_POST['password']
) {
    $surname = $_POST['surname'];
    $lastname = $_POST['lastname'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confpassword = $_POST['password'];
} else {
}


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
                <form action="vender/reg.php" method="POST">
                    <input type="hidden" name="" value="">
                    <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                        <div class="form-group">
                            <label class="control-label block">Имя</label>
                            <input class="form-control" type="text" name="lastname" placeholder="Введите имя" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                        <div class="form-group">
                            <label class="control-label block">Фамилия</label>
                            <input class="form-control" type="text" name="surname" placeholder="Введите фамилию" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                        <div class="form-group">
                            <label class="control-label block">E-mail</label>
                            <input class="form-control" type="email" name="email" placeholder="Введите email" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                        <div class="form-group">
                            <label class="control-label block">Телефон</label>
                            <input class="form-control" type="phone" id="phone" name="phone" placeholder="Введите телефон" />
                        </div>
                    </div>
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
                            <label class="control-label">Пароль еще раз</label>
                            <input class="form-control" type="password" name="confpassword" placeholder="Введите пароль ещё раз" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                        <?php
                        if ($_SESSION["message"]) {
                            $alert = $_SESSION["message"];
                            echo "<p style = 'color:red;'> $alert</p>";
                        }
                        unset($_SESSION["message"]);
                        ?>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Регистрация</button>
                        </div>
                    </div>

            </div>
            </form>
            <div class="col-xs-12 col-sm-3 col-sm-offset-4">
                <div class="form-group">
                    <a href='/login.php'>Уже есть аккаунт</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php require_once "./vender/endPage.php"; ?>
<script>
    $(document).ready(function() {
        $("#phone").inputmask("+7 (999) 999-9999");
    })
</script>
<?php if ($_GET['reg-action'] == 1) {?>
    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Покупка завершена</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Успешная покупка
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#successModal').modal();
    </script>
<?php }?>