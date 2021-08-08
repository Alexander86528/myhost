<?php
/*
Создайте массив $arr=['a', 'b', 'c', 'd'] и с его помощью выведите на экран строку 'a+b, c+d'.
*/
$arr = [
    'a',
    'b',
    'c',
    'd',
];
echo $arr[0] . ' + ' . $arr[1] . ', ' . $arr[2] . ' + ' . $arr[3] . '.' . PHP_EOL;
foreach ($arr as $key => $value) {
    echo $key . ' => ' . $value . PHP_EOL;
}
