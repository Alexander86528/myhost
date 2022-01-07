<?php
/*
 Создайте многомерный массив $arr. С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'.
$arr = [
	'cms'=>['joomla', 'wordpress', 'drupal'],
	'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
*/
$arr = [
    'cms' => [
        'jomla', 
        'wordpress', 
        'drupal',
    ],
    'colors' => [
        'blue' => 'голубой',
        'red' => 'красный',
        'green' => 'зелёный',
    ],
];
/*
var_dump($arr['cms'][0]);
var_dump($arr['cms'][2]);
var_dump($arr['colors']['green']);
var_dump($arr['colors']['red']);

foreach ($arr['cms'] as $key => $value) {
    if ($key == 0 or $key == 2) {
        var_dump($value);
    }
}
foreach ($arr['colors'] as $key => $value) {
    if ($key == 'green' or $key == 'red') {
        var_dump($value);
    }
}
*/
foreach ($arr as $key) {
    foreach ($key as $key1 => $value) {
        if ($key1 === 0 or $key1 == 2 or $key1 == 'green' or $key1 == 'red') {
            var_dump($value);
        }
    }
}
