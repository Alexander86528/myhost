<?php
/*
 Создайте массив $arr. Выведите на экран элемент с ключом 'c'.
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
*/
$arr = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];
var_dump($arr['c']);

foreach ($arr as $key => $variable) {
    if ($key == 'c') {
        echo $key . ' => ' . $variable . PHP_EOL;
    }
}