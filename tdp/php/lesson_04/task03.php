<?php
/*
Если переменная $a меньше нуля, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3.
*/
$array = [-3, 0, 1];
$a = $array[rand(0, 2)];

echo '$a = ' . $a . '<br>';
echo 'if ($a < 0)' . '<br>';

if ($a < 0) {
    echo 'true';
} else {
    echo 'false';
}
