<?php

echo '<pre>';
echo '1) $_REQUEST' . '<br>';
print_r($_REQUEST);
echo '<br>';
echo '2) $_GET' . '<br>';
print_r($_GET);
echo '<br>';
echo '3) $_POST' . '<br>';
print_r($_POST);
echo '<br>';
echo '</pre>';

?>
<!DOCTYPE html>
<!-- tdp Урок 10. "Основы работы с формами в PHP" -->
<!-- Видео из дополнительных материалов "2.flv" -->
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Основы работы с формами</title>
</head>
<body>
  <form action="flv_02.php" method="GET">
    <input type="text" name="user" placeholder="Ведите имя">
    <input type="text" name="age" placeholder="Введите возраст">
    <textarea name="text"></textarea>
    <input type="submit" value="Отправить">
  </form>
  <a href="flv_02.php?id=1&test=1">ссылка 1</a>
  <a href="flv_02.php?id=2&test=2">ссылка 2</a>
  <a href="flv_02.php?id=3&test=3">ссылка 3</a>
</body>
</html>
