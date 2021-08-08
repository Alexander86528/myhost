<pre>
<?php
/*
. Переменная $lang может принимать два значения: 'ru' и 'en'. Если она имеет значение 'ru', то в переменную $arr запишем массив дней недели на русском языке, а если имеет значение 'en' – то на английском. Решите задачу через 2 if, через switch-case и через многомерный массив без ифов и switch.
*/
if (rand(0, 1)) {
    $lang = 'ru';
} else {
    $lang = 'en';
}
echo '$lang = ' . $lang . PHP_EOL . PHP_EOL;

echo 'if-else' . PHP_EOL;
if ($lang == 'ru') {
    $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
} else {
    $arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
}
//var_dump($arr) . PHP_EOL;
print_r($arr) . PHP_EOL;

echo 'switch-case' . PHP_EOL;
switch ($lang) {
    case 'ru':
        $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
    break;
    case 'en':
        $arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
    break;
}
print_r($arr) . "\n";

echo 'associative array' . "\n";
$arr =[
    'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
];
print_r($arr[$lang]) . PHP_EOL;

