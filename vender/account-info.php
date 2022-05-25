<?php

?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3">
            <div class="text-center">
                <img class="rounded-circle block center-block" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold block center-block"><?= $users['lastname'] . ' ' . $users['surname']?></span>
                <span class="text-black-50 block center-block"><?= $users['email']?></span>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="margin-top-30px">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-center">Настройки профиля</h4>
                </div>  

                <form action="/vender/update-account.php" method="post">
                    <input type="hidden" name="id" value="<?= $users['id'] ?>" />
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Имя</label>
                            <input type="text" class="form-control" placeholder="Имя" name='lastname' value="<?= $users['lastname'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Фамилия</label>
                            <input type="text" class="form-control" value="<?= $users['surname'] ?>" placeholder="Фамилия" name="surname">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Телефон</label>
                            <input type="text" class="form-control" placeholder="Номер телефон" name="phone" id="phone" value="<?= $users['phone'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input alias="email" type="text" class="form-control" placeholder="Email" name="email" value="<?= $users['email'] ?>">
                        </div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" name="submit" type="submit">Сохранить</button></div>
                </form>

            </div>
        </div>
    </div>
</div>