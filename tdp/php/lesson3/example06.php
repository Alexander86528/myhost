<?php
/*
Дан многомерный массив $arr:
$arr = [
	'ru'=>['голубой', 'красный', 'зеленый'],
	'en'=>['blue', 'red', 'green'],
];
Выведите с его помощью слово 'голубой'.
*/
$arr = [
    'ru' => ['голубой', 'красный', 'зеленый'],
    'en' => ['blue', 'red', 'green'],
];

var_dump($arr['ru'][0]);
echo PHP_EOL;

foreach ($arr as $arr1) {
    foreach($arr1 as $key => $value) {
        echo 'key => ' . $key . ' value => ' . $value . PHP_EOL;
    }
    echo PHP_EOL;
}
