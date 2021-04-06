<?php

$arr = ['a', 'b', 'c', 'd', 'e',];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача N5. GET-запросы и массивы.</title>
</head>
<body>
    <p>
        Дан массив.<br>
        Сделайте так, чтобы с помощью GET-запроса можно было вывести любой элемент этого массива.
    </p>
    <?php
         if (isset($arr[$_GET['get']])) {
            echo $arr[$_GET['get']] . '<br>';
        } else {
            echo 'Nothing!' . '<br>';
        }
    ?>
</body>
</html>