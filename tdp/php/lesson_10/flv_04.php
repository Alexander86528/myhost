<?php

$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$text = $_REQUEST['text'];

?>
<!DOCTYPE html>
<!-- tdp Урок 10. "Основы работы с формами в PHP" -->
<!-- Видео из дополнительных материалов "3.flv" -->
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Основы работы с формами</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Введите имя"><br><br>
        <input type="text" name="age" placeholder="Введите возраст"><br><br>
        <textarea name="text" placeholder="Введите сообщение"></textarea><br>
        <input type="submit" >
    </form>
    <?php
      if (!empty($_REQUEST['name'] and $_REQUEST['age'] and $_REQUEST['text'])) {
        echo 'Привет, ' . $name . ' ' . $age . '<br>';
        echo 'Сообщение ' . $text . '<br>';
      }
    ?>
</body>
</html>
