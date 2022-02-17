<link rel="stylesheet" href="style.css">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
echo "<a href='index.php'>index.php</a><br>";
/*
Пусть у нас есть переменная $min, в которой хранится количество минут от 0 до 59.
в какую четверть часа попадает указанное количество минут
*/
$min = rand(0, 59);
var_dump($min);
echo '<br><br>';
echo "<span>task 1</span><br>";
if ($min >= 0 && $min < 15) {
  echo "minut = $min Первая четверть";
}
if ($min >= 15 && $min < 30) {
  echo "minut = $min Вторая четверть";
}
if ($min >= 30 && $min < 45) {
  echo "minut = $min Третья четверть";
}
if ($min >= 45 && $min < 60) {
  echo "minut = $min Четвёртая четверть";
}
echo "<br><br>";
/*
task 1
Решите аналогичную задачу, только определите в какую треть часа попадает указанное количество минут.
*/
echo "<span>task 2</span><br>";
if ($min >= 0 && $min < 20) {
  echo "minut = $min Первая треть";
}
if ($min >= 20 && $min < 40) {
  echo "minut = $min Вторая треть";
}
if ($min >= 40 && $min < 60) {
  echo "minut = $min Третья треть";
}
echo "<br><br>";

/* напишем условие, которое выведет сообщение на экран, если длина строки равна или больше трех символов */
echo "<span>examle</span><br>";
$str = 'as';
var_dump($str);
echo "<br>";

if (strlen($str) >= 3) {
  echo "str = strlen($str) Больше или равно 3<br>";
} else {
  echo "str = strlen($str) Меньше 3<br>";
}
echo "<br><br>";


/*
В переменной $arr содержится некоторый массив с числами.
Напишите условие, которое проверит, что в массиве 3 элемента.
Если это так, выведите на экран сумму элементов массива.
*/
echo "<span>task 2</span><br>";
$chArr = rand(2, 3);
var_dump($chArr);
echo "<br>";
for ($i = 0; $i < $chArr; $i++){
  $arr[] = rand(0, 1);
}
var_dump($arr);
echo "<br>";
if (count($arr) == 3) {
  for ($i = 0, $s = 0; $i < 3; $i++) {
    $s += $arr[$i];
    // echo "$s<br>";
  }
  echo "sum = $s<br>";
}
echo "<br>";
echo "<span>examle 2</span><br>";
$string = (string)rand(100, 1000000000);
var_dump($string);
echo '<br>';
echo 'strlen = ' . strlen($string) . "<br>";
for ($i = 0, $s = 0; $i < strlen($string); $i++) {
  // echo $string[$i] . "<br>";
  if ($string[$i] == 1) {
    echo "string[$i] = " . $string[$i] . '<br>';
    $s++;
  }
}
echo "sum = $s <br>";

echo "<br>";
echo "<span>task 3</span><br>";
/*
Как известно, четные числа делятся на 2 без остатка, а нечетные - с остатком.
Пусть у вас дано число.
С помощью оператора % и конструкции if проверьте четное это число или нет.
*/
$ch = rand(1, 10000);
var_dump($ch);
echo '<br>';
echo 'ch / 2 = ' . $ch / 2 . '<br>';
if ($ch % 2 === 0) {
  echo "Число ch = $ch - чётное <br> ";
} else {
  echo "Число ch = $ch - не чётное <br> ";
}

echo "<br>";
echo "<span>task 4</span><br>";
/*
Дано число. Проверьте, что оно делится на 3.
*/
echo "ch / 3 = " . $ch / 3 . "<br> ";
if ($ch % 3 === 0) {
  echo "Число ch = $ch - делится на 3 <br> ";
} else {
  echo "Число ch = $ch - не делится на 3 <br> ";
}