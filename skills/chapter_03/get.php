<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>GET</title>
</head>
<body>

    <p>
        Ввод через адресную строку
    </p>

    <pre><?php 
            echo '$_GET' . PHP_EOL;
            var_dump($_GET);
            echo '$_POST' . PHP_EOL;
            var_dump($_POST);
            echo '$_REQUEST' . PHP_EOL;
            var_dump($_REQUEST);
        ?>
    </pre>
    
</body>
</html>