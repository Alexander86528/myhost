<?php

?>
<!DOCTYPE html>
<!-- tdp Урок 10. "Основы работы с формами в PHP" -->
<!-- Видео из дополнительных материалов "1.flv" -->
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.flv (Вёрстка)</title>
</head>
<body>
    <p>php tdp lesson_07(form) 1.flv</p>
    <form action="" method="$_GET">
        <p><label>Name: <input type="text" name="name"></label></p>
        <p><label>Age: <input type="text" name="age"></label></p>
        <p><button>Send</button></p>
    </form>
    <?php
        echo 'Name: ' . $_GET['name'] . '<br>';
        echo 'Age: ' . $_GET['age'] . '<br>';
    ?>
</body>
</html>