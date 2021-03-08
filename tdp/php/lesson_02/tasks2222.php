<?php
/*
Example 1.
Создайте переменную $var и присвойте ей значение 'hello'. 
Обращаясь к отдельным символам этой строки выведите на экран 
символ 'h', символ 'e', символ 'o'.
*/
echo 'example 1:' . PHP_EOL;
$var = 'hello';
echo $var[0] . ' ,';
echo $var[1] . ' ,';
echo $var[4] . PHP_EOL;
echo PHP_EOL;
/*
Example 2.
Напишите скрипт, который считает количество секунд в часе
*/
echo 'example 2:' . PHP_EOL;
echo 'Количество секунд в часе = ' . 60 * 60 . PHP_EOL;
echo 'Количество секунд в сутках = ' . 24 * 60 *60 . PHP_EOL;
echo PHP_EOL;
/*
Example 3.
Переделайте приведенный код так, чтобы в нем использовались 
операции +=, -=, *=, /=, ++, --. 
Количество строк кода при этом не должно измениться. 
Код для переделки:
$var = 1;
$var = $var + 12;
$var = $var - 14;
$var = $var * 5;
$var = $var / 7;
$var = $var + 1;
$var = $var - 1;
echo $var;
*/
echo 'example 3:' . PHP_EOL;
$var = 1;
echo '$var = ' . $var . PHP_EOL;
$var +=12;
echo '$var += 12 == ' . $var . PHP_EOL;
$var -= 14;
echo '$var -= 14 == ' . $var . PHP_EOL;
$var *= 5;
echo '$var *= 5 == ' . $var . PHP_EOL;
$var /= 7;
echo '$var /= 7 == ' . $var . PHP_EOL;
$var++;
echo '$var++ == ' . $var . PHP_EOL;
$var--;
echo '$var-- == ' . $var . PHP_EOL;
echo PHP_EOL;
/*
task 1
 Создайте переменную $a и присвойте ей значение 3.
 Выведите значение этой переменной на экран.
*/
echo 'task 1:' . PHP_EOL;
$a = 3;
echo '$a = ' . $a . PHP_EOL;
echo PHP_EOL;

/*
task 2
 Создайте переменные $a=10 и $b=2. Выведите на экран их 
 сумму, разность, произведение и частное (результат деления)
*/
echo 'task 2:' . PHP_EOL;
$a = 10;
$b = 2;
echo '$a = ' . $a . PHP_EOL;
echo '$b = ' . $b . PHP_EOL;
echo '$a + $b = ' . ($a + $b) . PHP_EOL;
echo '$a - $b = ' . ($a - $b) . PHP_EOL;
echo '$a * $b = ' . ($a * $b) . PHP_EOL;
echo '$a / $b = ' . ($a / $b) . PHP_EOL;
echo PHP_EOL;

/*
task 3
 Создайте переменные $c=15 и $d=2.
 Просуммируйте их, а результат присвойте переменной $result.
 Выведите на экран значение переменной $result.
*/
echo 'task 3:' . PHP_EOL;
$c = 15;
$d = 2;
$result = $c + $d;
echo '$c = ' . $c . PHP_EOL;
echo '$d = ' . $d . PHP_EOL;
echo '$result = ' . $result . PHP_EOL;
echo PHP_EOL;
/*
task 4
  Создайте переменные $a=10, $b=2 и $c=5.
  Выведите на экран их сумму
*/
echo 'task 4:' . PHP_EOL;
$a = 10;
$b = 2;
$c = 5;
echo '$a = ' . $a . PHP_EOL;
echo '$b = ' . $b . PHP_EOL;
echo '$c = ' . $c . PHP_EOL;
echo '$a + $b + $c = ' . ($a + $b + $c) . PHP_EOL;
echo "\n";
/*
task 5
 Создайте переменные $a=17 и $b=10.
 Отнимите от $a переменную $b и результат присвойте переменной $c.
 Затем создайте переменную $d, присвойте ей значение 7.
 Сложите переменные $c и $d, а результат запишите в переменную $result.
 Выведите на экран значение переменной $result.
*/
echo 'task 5:' . PHP_EOL;
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo '$result = ' . $result . PHP_EOL;
echo "\n";

/*
task 6
Создайте переменную $text и присвойте ей значение 'Привет, Мир!'.
Выведите значение этой переменной на экран
*/
echo 'task 6:' . PHP_EOL;
$text = 'Привет, мир!';
echo $text . PHP_EOL;
echo "\n";

/*
task 7
Создайте переменные $text1='Привет, ' и $text2='Мир!'.
С помощью этих переменных и операции сложения строк выведите
на экран фразу 'Привет, Мир!'
*/
echo 'task 7:' . PHP_EOL;
$text1 = 'Привет, ';
$text2 = 'мир!';
echo $text1 . $text2 . PHP_EOL;
echo "\n";

/*
task 8
 Создайте переменную $name и присвойте ей ваше имя. 
 Выведите на экран фразу 'Привет, %Имя%!'. 
 Вместо %Имя% должно стоять ваше имя.
*/
echo 'task 8:' . PHP_EOL;
$name = 'Alexander';
echo 'Привет, ' . $name . '!' . PHP_EOL;
echo "\n";

/*
task 9
Создайте переменную $age и присвойте ей ваш возраст. 
Выведите на экран 'Мне %Возраст% лет!'.
*/
echo 'task 9:' . PHP_EOL;
$age = 49;
echo 'Мне ' . $age . ' лет.' . PHP_EOL;
echo "\n";

/*
task 10
Создайте переменную $text и присвойте ей значение 'abcde'. 
Обращаясь к отдельным символам этой строки выведите на экран 
символ 'a', символ 'c', символ 'e'.
*/
echo 'task 10:' . PHP_EOL;
$text = 'abcde';
echo $text[0] . ', ' . $text[2] . ', ' . $text[4] . '.' . PHP_EOL;
echo "\n";

/*
task 11
Дана произвольная строка, например, 'abcde'. 
Поменяйте первую букву (то есть букву 'a') этой строки на '!'.
*/
echo 'task 11:' . PHP_EOL;
$text[0] = '!';
echo $text . PHP_EOL;
echo "\n";

/*
task 12
Создайте переменную $num и присвойте ей значение '12345'.
Найдите сумму цифр этого числа.
*/
echo 'task 12:' . PHP_EOL;
$num = '12345';
echo $num[0] . $num[1] . $num[2] . $num[3] . $num[4] . PHP_EOL;
echo "\n";

/*
task 13
Напишите скрипт, 
который считает количество секунд в часе, в сутках, в месяце.
*/
echo 'task 13:' . PHP_EOL;
echo 'Количество секунд в часе :' . 60 * 60 . PHP_EOL;
echo 'Количество секунд в сутках :' . 60 * 60 * 24 . PHP_EOL;
echo 'Количество секунд в месяце :' . 60 * 60 * 24 * 30 . PHP_EOL;
echo "\n";

/*
task 14
Создайте три переменные - час, минута, секунда. 
С их помощью выведите текущее время в формате 'час:минута:секунда'.
*/
echo 'task 14:' . PHP_EOL;
$hour = strftime("%H");
$minute = strftime("%M");
$second = strftime("%S");
echo $hour . 5 . ':' . $minute . ':' . $second . PHP_EOL;
echo "\n";

//echo date('H:i:s') . PHP_EOL;
//echo strftime("%H:%M:%S") . PHP_EOL;

/*
task 15
Создайте переменную, присвойте ей число. 
Возведите это число в квадрат 
(это значит нужно умножить его само на себя). 
Выведите его на экран.
*/
echo 'task 15:' . PHP_EOL;
$a = 34;
echo '34 * 34 = ' . 34 * 34 . PHP_EOL;
echo "\n";

/*
task 16
Переделайте этот код так, 
чтобы в нем использовались операции +=, -=, *=, /=. 
Количество строк кода при этом не должно измениться.
$var = 47;
$var = $var + 7;
$var = $var - 18;
$var = $var * 10;
$var = $var / 20;
echo $var;
*/
echo 'task 16:' . PHP_EOL;
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var . PHP_EOL;
echo "\n";
