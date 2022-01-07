<?php

$a = ' string ';
$b = ' строка ';
$text = 'text';
var_dump($a);
var_dump($b);
$c = $a . $b . $text;
echo $c . PHP_EOL;
echo $c[1] . PHP_EOL;
//var_dump(PHP_EOL);

//разница между ++a и a++
$d = 0;
echo '++d = ' . ++$d . PHP_EOL;//Выведет 1
echo 'd++ = ' . $d++ . PHP_EOL;//Выведет 1, а затем прибавит 1
echo '$d = ' . $d . PHP_EOL;// Выведет 2

//Операция ".= "
$str = 'asdfg';
$str .= 'hjkl';//Тоже что и $str = $str . 'hjkl';
echo $str . PHP_EOL;

