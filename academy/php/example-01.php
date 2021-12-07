<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Встраивание php в html</title>
</head>
<body>
  <h1>Информация о пользователе</h1>
  <?php $browser = get_browser(null, true); ?>
  <dl>
    <dt><strong>Ваш IP адрес:</strong></dt>
    <dd><em><?php print($_SERVER['REMOTE_ADDR']); ?></em></dd>

    <dt><strong>Операционная система:</strong></dt>
    <dd><em><?php print($browser['platform']); ?></em></dd>

    <dt><strong>Браузер:</strong></dt>
    <dd><em><?php print($browser['browser']); ?></em></dd>
  </dl>
</body>
</html>