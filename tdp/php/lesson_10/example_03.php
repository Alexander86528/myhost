<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (!isset($_GET['city'])) {
    ?>
        <form action="" method="$_GET">
            <input type="text" name="city">
            <input type="submit" value="Отправить">
        </form>
    <?php
        }
    ?>
</body>
</html>