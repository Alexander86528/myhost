<?php
echo '<h2>task 01</h2>';
echo 'Проверьте то, что переменная $num больше нуля и меньше 5.<br>';
echo '0 < $num < 5 <br>';
$num = mt_rand(-2, 7);
echo '$num == ' . $num . '<br>';
/*
if (0 < $num && $num < 5){
  echo "0 < $num and $num < 5\n";
} elseif ($num < 0){
    echo "$num < 0 \n";
} elseif ($num > 5){
    echo "5 < $num \n";
} elseif ($num == 0){
    echo "$num == 0 \n";
} else {
    echo "$num == 5 \n";
}
*/
if (0 < $num && $num < 5){
  echo 'Верно!<br>';
  echo '0 < ' . $num . ' < 5 <br>';
} else {
  echo 'Не верно! <br>';
}

echo '<h2>task 02</h2>';
echo 'Проверьте то, что переменная $num больше или равна 10 и меньше или равна 20.<br>';
$num = mt_rand(5, 25);
echo '10 <= $num <= 20 <br>';
echo '$num == ' . $num . '<br>';
if (10 <= $num && $num <= 20){
  echo 'Верно!<br>';
  echo "10 <= $num <= 20 \n";
} else {
  echo 'Не верно! <br>';
}

echo '<h2>task 03</h2>';
echo 'Проверьте то, что переменная $num1 равна или меньше 1, а переменная $num2 больше или равна 3.<br>';

$num1 = mt_rand(-1, 1);
$num2 = mt_rand(2, 4);
echo '$num1 <= 1 && 3 <= $num2 <br>';
echo '$num1 == ' . $num1 . '<br>';
echo '$num2 == ' . $num2 . '<br>';
if ($num1 <= 1 && $num2 >= 3){
  echo 'Верно!<br>';
  echo $num1 . ' <= 1 and 3 <= ' . $num2 . '<br>';
} else {
  echo 'Не верно! <br>';
}