<?php

$arr = ['a', 'b', 'c', 'd', 'e',];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET-запросы и массивы</title>
</head>
<body>
    <p>
        Передача через адресную строку GET-параметра массива.<br>
        'get'= X. <br>
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