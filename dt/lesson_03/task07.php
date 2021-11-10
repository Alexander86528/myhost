<?php
/*
Создайте массив $arr. Найдите сумму элементов этого массива.
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
*/
$arr = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];
$arrSum = 0;

var_dump($arr['a'] + $arr['b'] + $arr['c']);

foreach ($arr as $variable) {
    echo '$variable' . ' ' . $variable . PHP_EOL;
    $arrSum += $variable;
}
var_dump($arrSum);
