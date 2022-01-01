<?php
  echo '<h1>' . 'Задача 4' . '</h1>';
  echo 'Создайте массив $date с ключами \'year\', \'month\' и \'day\' и значениями, соответствующими текущему дню.<br>Выведите созданную дату на экран в формате день-месяц-год.';
  echo '<br>';

  $date = [
    'day' => strftime('%d'),
    'month' => strftime('%B'),
    'year' => strftime('%Y'),
  ];

echo $date['day'] . '-' . $date['month'] . '-' . $date['year'] . '.';

echo '<br>';
echo '<pre>';
print_r($date);
echo '</pre>';
