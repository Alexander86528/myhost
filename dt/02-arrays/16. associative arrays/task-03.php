<?php
  echo '<h1>' . 'Задача 3' . '</h1>';
  echo 'Создайте массив $user с ключами \'name\', \'surname\', \'patronymic\' и какими-то произвольными значениями.<br>Выведите на экран фамилию, имя и отчество через пробел.';

  $array = [
    'name' => 'Иван',
    'patronymic' => 'Иванович',
    'surname' => 'Иванов',
  ];
  echo '<br>';
  echo $array['name'] . ' ' . $array['patronymic'] . ' ' . $array['surname'] . '.';

  echo '<pre>';
  print_r($array);
  echo '</pre>';
