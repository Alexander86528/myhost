<?php

$name = $_POST['name'];

?>
<!DOCTYPE html>
<!-- tdp Урок 10. "Лекция 7" Формы. Задачи -->
<!-- Видео из дополнительных материалов "3.flv" -->
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>3.flv (Решение задачи 1)</title>
</head>
<body>
  <p><b>Задача 1.</b><br> Спросите имя пользователя с помощью формы.<br> Результат запишите в
переменую $name.<br> Выведите на экран фразу 'Привет, %Имя%'.<br>
  </p>
  <form action="" method="POST">
    <p><label><input type="text" name="name" placeholder="Введите имя"></label></p>
    <p><label><input type="submit" value="Отправить"></label></p>
  </form>
  <?php
    if (!empty($_POST['name'])) {
      echo 'Привет, ' . $name . '!' . '<br>';
    }
  ?>
</body>
</html>