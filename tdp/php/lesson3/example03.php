<?php
/*
Дан массив ['Привет, ', 'мир', '!']. Необходимо записать в первый элемент (то есть элемент с номером ноль) этого массива слово 'Пока, ' (то есть вместо слова 'Привет, ' будет 'Пока, ').
*/
$arr = [
    'Hello, ',
    'world',
    '!',
];

$arr[0] = 'Goodbye';
var_dump($arr);