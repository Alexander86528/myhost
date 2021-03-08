<pre>

<?php

/*
Дан массив $arr.
С помощью цикла foreach запишите английские названия в массив $en, а русские - в массив $ru.
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
*/

$arr = [
    'green' => 'зелёный',
    'red' => 'красный',
    'blue' => 'голубой',
];
print_r($arr);

foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}
print_r($en);
print_r($ru);
