<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача N4. Работа с GET запросами в PHP</title>
</head>
<body>
    <p>
        Пусть с помощью GET-запроса отправляется число. 
        Оно может быть или 1, или 2. <br>
        Сделайте так, чтобы если передано 1 - на экран вывелось слово 'привет', а если 2 - то слово 'пока'.
    </p>
    <pre>
    <?php
        print_r($_GET);
        echo '<br>';

        foreach ($_GET as $value) {
            if ($value == 1) {
                echo 'Hello!' . '<br>';
            }
            if ($value == 2) {
                echo 'Goodbye!' . '<br>';
            }
            if ($value != 1 and $value != 2) {
                echo 'Nothing!' . '<br>';
            }
        }
    ?>
    </pre>
</body>
</html>