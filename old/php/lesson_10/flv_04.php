<?php

$name = strip_tags(trim($_POST['name']));
$age = strip_tags(trim($_POST['age']));
$text = strip_tags(trim($_POST['text']));

?>
<!DOCTYPE html>
<!-- tdp Урок 10. "Основы работы с формами в PHP" -->
<!-- Видео из дополнительных материалов "4.flv" -->
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>4.flv (Решение задачи 2)</title>
</head>
<body>
    <p><b>Задача 2.</b><br> Спросите у пользователя имя, возраст, а также попросите его ввести
сообщение (textarea).<br> Выведите эти данные на экран в формате,
приведенном под данной задачей.<br> Позаботьтесь о том, чтобы
пользователь не мог вводить теги и таким образом сломать сайт.<br>
    </p>
    <form action="" method="POST">
        <p><label><input type="text" name="name" placeholder="Введите имя"></label></p>
        <p><label><input type="text" name="age" placeholder="Введите возраст"></label></p>
        <p><label><textarea name="text" placeholder="Введите сообщение"></textarea></label></p>
        <p><label><input type="submit" ></label></p>
    </form>
    <?php
      if (!empty($_POST['name'] and $_POST['age'] and $_POST['text'])) {
        echo 'Привет, ' . $name . ' ' . $age . '<br>';
        echo 'Сообщение: ' . $text . '<br>';
      }
    ?>
</body>
</html>
