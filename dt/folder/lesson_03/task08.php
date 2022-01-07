<?php
/*
Создайте массив заработных плат $arr. Выведите на экран зарплату Пети и Коли.
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
*/
$arrSalary = [
    'Коля' => '1000$',
    'Вася' => '500$',
    'Петя' => '200$',
];
var_dump($arrSalary['Петя']);
var_dump($arrSalary['Коля']);

foreach ($arrSalary as $key => $variable) {
    if ($key != 'Вася')
        echo $key . ' => ' . $variable . PHP_EOL;
}
