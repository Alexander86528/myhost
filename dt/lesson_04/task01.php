<?php
/*
 Если переменная $a равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
*/
$array = [1, 0, -3];
$a = $array[rand(0, 2)];

echo '$a = ' . $a . '<br>';
if ($a == 0) {
    echo 'true' . PHP_EOL;
} else {
    echo 'false' . PHP_EOL;
}
