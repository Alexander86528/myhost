<?php
/*
Пусть теперь в переменной $lang хранится язык (она принимает одно из значений или 'ru', или 'en' - либо то, либо то), а в переменной $day - номер дня. Выведите словом день недели, соответствующий переменным $lang и $day. То есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'.
*/
//$lang = null;
if (rand(0, 1)) {
    $lang = 'ru';
} else {
    $lang = 'en';
}
var_dump($lang);
$day = rand(1, 7);
var_dump($day);
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
var_dump($arr[$lang][$day]);
