<?php

$number = $_GET["number"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
</head>
<body>
    <form>
        <input type="number" step="any" name="number">
    </form>
    <p>floatval();</p>
    <p>+$number;</p>
    <p>
        +$a	Идентичность(арифметическая операция).
        Конвертация $a в int или float, что более подходит.
    </p>
    
    <?php 
        var_dump($number);
        echo '<br>';
        var_dump($number * 1);
        echo '<br>';
        var_dump(+$number);
        echo '<br>';
        echo $number * 1 . '<br>';
        echo +$number . '<br>';
        var_dump(floatval($number));
    ?>
</body>
</html>
