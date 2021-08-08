<?php
echo '<pre>';
$loginInFile = 'qw';
$passwordInFile = 'as';
/*
if (empty($_POST['login'])) {
    echo 'fill in the login field' . PHP_EOL;
} elseif (empty($_POST['password'])) {
    echo 'fill in the password field' . PHP_EOL;
} elseif ($loginInFile != $_POST['login']) {
    echo 'invalid login' . PHP_EOL;
} elseif ($passwordInFile != $_POST['password']) {
    echo 'Invalid password' . PHP_EOL;
}
*/

print_r($_POST);
echo "\n";

if (!empty($_POST['login'])) {
    $login = strip_tags(trim($_POST['login']));
}
if (!empty($_POST['password'])) {
    $password = strip_tags(trim($_POST['password']));
}

if (($loginInFile == $login) && ($passwordInFile == $password)) {
    echo 'yes' . '<br>';
} else {
    echo 'no' . '<br>';
}
/*
if ($loginInFile == $_POST['login'] && $passwordInFile == $_POST['password']) {
    echo 'Access is allowed' . '<br>';
} else {
    echo 'BANNED!' . '<br>';
}
*/
echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6.flv(task_4)</title>
</head>
<body>
    <h3>Задача 4</h3>
    <p>
        Спросите у пользователя логин и пароль (в браузере должен быть звездочками).<br>
        Сравните их с логином $login и паролем $pass, хранящихся в файле.<br>
        Если все верно — выведите <i>'Доступ разрешен!'</i>, в противном случае — <i>'Доступ запрещен!'</i>.<br>
        Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь.<br>
    </p>
    <?php
        if (empty($_POST)) {
    ?>
        <form action="" method="POST">
            <p><label>Enter login: <input type="text" name="login"></label></p>
            <p><label>Enter password: <input type="password" name="password"></label></p>
            <p><label><input type="submit" value="Send"></label></p>
        </form>
    <?php
        } elseif (!empty($_POST) && ($loginInFile != $login) || ($passwordInFile != $password)) {
            echo 'НЕ ВЕРНО ВВЕДЁН ЛОГИН ИЛИ ПАРОЛЬ!' . '<br>';
    ?>
        <form action="" method="POST">
            <p><label>Enter login: <input type="text" name="login" value="<?php echo "$login";?>"></label></p>
            <p><label>Enter password: <input type="password" name="password" value="<?php echo "$password";?>"></label></p>
            <p><label><input type="submit" value="Send"></label></p>
        </form>
    <?php
        } elseif (!empty($_POST) && ($loginInFile == $login) && ($passwordInFile == $password)) {
            echo 'Access is allowed' . '<br>';
        }
    ?>












   
</body>
</html>