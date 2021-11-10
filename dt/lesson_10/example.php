<?php
echo $_GET['user'];
echo '<br>';
echo $_GET['message'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example form</title>
</head>
<body>
    <form action="" method="$_GET">
        <input type="text" name="user" value="<?php echo $_REQUEST['user'];?>">
        <br><br>
        <textarea name="message"></textarea>
        <br><br>
        <input type="submit">
    </form>
</body>
</html>
