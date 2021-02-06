<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Метод GET</title>
</head>
<body>
    <form>
        <input type="text" name="ab">
        <input type="submit" value="submit" name="bc">
    </form>
    <pre><?php
        echo '$_GET' . PHP_EOL;
        var_dump($_GET);
        echo '$_REQUEST' . PHP_EOL;
        var_dump($_REQUEST);
    ?>
    </pre>
    
</body>
</html>