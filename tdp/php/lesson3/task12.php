<?php
/*
Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'. Пусть первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй - по-английски. Выведите с помощью этого массива понедельник по-русски и среду по английски (пусть понедельник - это первый день).
*/
$arr = [
    'ru' => [
        1 => 'Понедельник',
        'Вторник',
        'Среда',
        'Четверг',
        'Пятница',
        'Суббота',
        'Воскресенье',
    ],
    'en' => [
        1 => 'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday',
    ],
];
var_dump($arr['ru'][3]);
var_dump($arr['en'][3]);

foreach ($arr as $k => $v) {
    echo '$key: ' . $k . PHP_EOL;
    foreach ($v as $key1 => $var) {
        echo '$key1: ' . $key1 . ' => ' . '$var: ' . $var . PHP_EOL;
    }
}
