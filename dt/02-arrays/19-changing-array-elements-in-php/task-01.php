<?php
  echo '<h2>Задача 1</h2>';
  echo "Дан массив:" . '$arr = [\'a\' => 1, \'b\' => 2, \'c\' => 3, ]; <br>';
  echo 'Измените значение каждого из элементов этого массива.<br>';

  $arr = ['a' => 1, 'b' => 2, 'c' => 3, ];
  echo '<pre>';
  var_dump($arr);
  print_r($arr);
  echo '<br>';

  $arr['a'] = 4.1;
  $arr['b'] = 5.2;
  $arr['c'] = 6.3;
  var_dump($arr);
  print_r($arr);
  echo '</pre>';

  echo '<h2>Задача 2</h2>';
  echo 'Прибавьте к каждому элементу массива число 3. Выведите на экран измененный массив.';
  echo '<br>';

  $arr['a'] += 3;
  $arr['b'] += 3;
  $arr['c'] += 3;

  echo '<pre>';
  print_r($arr);
  echo '</pre>';
?>
