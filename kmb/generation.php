<?php
    $start = $_GET["start"];
    $stop = $_GET["stop"];
    $step = $_GET["step"];

    $sign = ($step > 0)? +1: -1;
    $x = $start;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator of progression</title>
</head>
<body>
    <h4>Generator of progression</h4>
    <hr>
    <p>Enter numbers:</p>
    <form>
        <p>
            <label>start:</label>
            <input type="number" name="start">  
        </p>
        <p>
            <label>stop:</label>
            <input type="number" name="stop">
        </p>
        <p>
            <label>step:</label>
            <input type="number" name="step">
        </p>
        <p>
            <button type="submit">Отправить</button>
        </p>
    </form>
    <hr>
    <p>Initial data:</p>
    <?php
        echo "start == $start;<br>
            stop == $stop;<br>
            step == $step;<br>
            sign == $sign;<br>
            x == $x;<br>";
    ?>
    <hr>
    <p>Progression:</p>
    <?php
        if ($step != 0) {
            while ($x * $sign < $stop * $sign) {
                echo "x == $x; <br>";
                $x += $step;
            }
            echo "after x == $x; <br>";
        } else {
            echo 'step == 0 <br>';
        }
    ?>
    <hr>

</body>
</html>