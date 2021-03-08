<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>POST</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="cd">
        <input type="submit" value="Отправить" name="ef">
    </form>
    <pre><?php
        var_dump($_POST);
    ?>
    </pre>
</body>
</html>