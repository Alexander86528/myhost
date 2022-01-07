<?php
/*
Создайте массив заработных плат $arr. Выведите на экран зарплату Пети и Коли.
*/
$arr = [
    'Коля' => '1000$',
    'Вася' => '500$',
    'Петя' => '300$',
];
$zp = $arr['Вася'];
$name = 'Вася';

var_dump($arr['Петя']);
var_dump($arr['Коля']);
var_dump($zp);
/*
foreach ($arr as $key => $value) {
    echo $key . ' => ' . $value . PHP_EOL;
    echo $arr[$name] . PHP_EOL;
}
*/
