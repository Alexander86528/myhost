<?php
/*
Переменная $num может принимать одно из значений: 1, 2, 3 или 4. Если она имеет значение '1', то в переменную $result запишем 'зима', если имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case
*/
$a = rand(1, 4);
var_dump($a);

switch ($a) {
    case 1:
        $result = 'зима';
    break;
    case 2:
        $result = 'весна';
    break;
    case 3:
        $result = 'лето';
    break;
    case 4:
        $result = 'осень';
    break;
}
echo $result;