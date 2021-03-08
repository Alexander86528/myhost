<?php

$name = $_REQUEST['name'];

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
    <input type="text" name="name" placeholder="Введите имя">
    <input type="submit" value="Отправить">
  </form>
  <?php
    if (!empty($_REQUEST['name'])) {
      echo 'Привет, ' . $name . '<br>';
    }
  ?>
</body>
</html>