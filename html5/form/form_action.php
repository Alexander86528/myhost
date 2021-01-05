<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Работа с формами(metanit)</title>
</head>
<body>
  <?php
    $name = $_POST["login"];
    $password = $_POST["password"];
    echo "Login: $name , password: $password\n";
  ?>
</body>
</html>