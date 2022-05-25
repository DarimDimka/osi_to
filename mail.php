<?php
    if(isset($_POST['name']) && isset($_POST['tel'])){
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];

        if(mail('dimashishlovshishlov@yandex.ru',
        'Новое письмо',
        'Вы успешно зарегистрировались!'."\n".
        'Вы ввели имя: '.$name . "\n".
        'Вы ввели телефон: '.$tel . "\n.
        'Вы ввели имя: '. '$message'"))
        {
            echo('Успешно отправлено');
        } 
        else {
            echo('Ошибка');
        }
    }

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="name" placeholder="Имя">
        <input type="number" name="tel" placeholder="Телефон">
        <input type="text" name="text" placeholder="Текст">

        <input type="submit" value="Отправить">
    </form>
    
</body>
</html>