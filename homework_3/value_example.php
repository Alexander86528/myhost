<?php
    print_r($_POST['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Value</title>
</head>
<body>
    <h3>Сохранение значений полей формы после отправки</h3>
    <form action="" method="POST">
        <p><label><input type="text" name="user" value="<?php echo $_POST['user']; ?>"></label></p>
        <p><label><input type="submit"></label></p>
    </form>
</body>
</html>