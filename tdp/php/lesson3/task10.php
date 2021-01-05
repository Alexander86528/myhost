<pre>
<?php
/*
Пусть теперь номер дня недели хранится в переменной $day, например там лежит число 3. Выведите день недели, соответствующий значению переменной $day.
*/
$arrWeek = [
    1 => 'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье',
];
var_dump($arrWeek);
$day = 3;
var_dump($arrWeek[$day]);

$day = rand(1, 7);
var_dump($day);

foreach ($arrWeek as $key => $value) {
    if ($key == $day) {
        echo $value . PHP_EOL;
    }
}
