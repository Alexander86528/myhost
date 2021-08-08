<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача N3. Работа с GET запросами в PHP</title>
</head>
<body>
    <p>
        Отправьте с помощью GET-запроса два числа.<br>
        Выведите его на экран сумму этих чисел.
    </p>
    <?php
        $sum = 0;
        foreach ($_GET as $key => $value) {
            echo '$key = ' . $key . ' ' . '$value = ' . $value . '<br>';
            $sum += $value;
        }
        echo 'Summa = ' . $sum . '<br>';
    ?>
</body>
</html>