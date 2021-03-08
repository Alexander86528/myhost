<?php

$numbers = [];

if (isset($_POST['submit'])) {
    $numbers = $_POST['numbers'];
    if (! empty($_POST['sort'])) {
        if ($_POST['sort'] == 'desc') {
            rsort($numbers);
        } else {
            sort($numbers);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>POST сортировка</title>
</head>
<body>
    <h4>Сортировка трёх чисел</h4>
    <form action="" method="post">
        Введите число: <input type="number" name="numbers[]"><br>
        Введите число: <input type="number" name="numbers[]"><br>
        Введите число: <input type="number" name="numbers[]"><br>

        <select name="sort">
            <option selected value="">Без сортировки</option>
            <option selected value="asc">По возрастанию</option>
            <option selected value="desc">По убыванию</option>
        </select>

        <input type="submit" name="submit"><br>
    </form>

    <pre><?php
            print_r($_POST);
            print_r($numbers);
        ?>
    </pre>
    
</body>
</html>