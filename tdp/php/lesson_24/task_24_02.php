<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача N2. Работа с GET запросами в PHP</title>
</head>
<body>
    <h3>Работа с GET запросами в PHP</h3>
    <p>
        Отправьте с помощью GET-запроса число.<br>
        Выведите его на экран квадрат этого числа.<br>
    </p>
    <?php
        var_dump($_GET);
        echo '<br>';
        echo $_GET['ch'] * $_GET['ch'];
    ?>
</body>
</html>