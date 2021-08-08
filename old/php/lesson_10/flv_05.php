<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>5.flv (Решение задачи 3)</title>
</head>
<body>
    
        <h3>Задача 3.</h3>
    <p>
        Спросите возраст пользователя.<br> 
        Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите.<br> 
        Если же форма не была отправлена (это будет при первом заходе на страницу) — просто покажите ее.<br>
    </p>
    <?php
    if (empty($_POST['age'])) {
    ?>
        <form action="" method="POST">
            <p><label>Please enter your age: <input type="text" name="age" placeholder="Введите ваш возраст"></label></p>
            <p><label><input type="submit" value="Send message"></label></p>
        </form>
    <?php
    } elseif (!empty($_POST['age'])) {
        print 'number = ' . strip_tags(trim($_POST['age'])) . PHP_EOL;
    }
    ?>  
</body>
</html>