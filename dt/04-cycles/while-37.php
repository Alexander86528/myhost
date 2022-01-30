<?php
echo "<a href='index.php'>index.php</a>";
echo '<br>';

echo 'task 1<br>';
echo 'Выведите на экран числа от 1 до 100.<br>';

$i = 1;
while ($i <= 100) {
  echo '$i = ' . $i . ';' . '<br>';
  $i++;
}
echo '<br>';

echo 'task 2<br>';
echo 'Выведите на экран числа от 11 до 33.<br>';

$i = 11;
while ($i <= 33) {
  echo '$i = ' . $i . ';' . '<br>';
  $i++;
}
echo '<br>';

echo 'task 3<br>';
echo 'Выведите на экран четные числа в промежутке от 0 до 100.<br>';

$i = 2;
while ($i <= 100) {
  echo '$i = ' . $i . ';' . '<br>';
  $i += 2;
}
echo '<br>';

echo 'task 4<br>';
echo 'Выведите на экран нечетные числа в промежутке от 1 до 99.<br>';

$i = 1;
while ($i <= 99) {
  echo '$i = ' . $i . ';' . '<br>';
  $i += 2;
}
echo '<br>';

echo 'task 5<br>';
echo 'Выведите на экран числа от 30 до 0.<br>';

$i = 30;
while ($i >= 0) {
  echo '$i = ' . $i . ';' . '<br>';
  $i--;
}
