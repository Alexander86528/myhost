<?php
/*
 Если переменная $a равна '1' и по значению и по типу, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном '1', 1, 3.
*/
$a = '1';
$arr = ['1', 1, 3];
$a_arr = $arr[rand(0, 2)];
//echo '$a_arr = ' . $a_arr . PHP_EOL;
var_dump($a_arr);

if ($a === $a_arr) {
    echo 'true' . PHP_EOL;
} else {
    echo 'false' . PHP_EOL;
}
