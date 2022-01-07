<?php
/*
Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' и с элементами '200', '300', '400'. С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля - зарплата 200 долларов.'.
*/
$arr = [
    'Kolya' => '200',
    'Wasya' => '300',
    'Petya' => '400',
];

foreach ($arr as $key => $element) {
    echo '\'' . $key . ' - ' . 'salary ' . $element . ' $\'' . '<br>';
}
echo "<br>";
foreach ($arr as $key => $element) {
    echo "'$key - salary $element $' <br>";
}
