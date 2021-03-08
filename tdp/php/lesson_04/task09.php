<?php
/*
 Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.
*/
$arrEmpty = [1, 3, -3, 0, null, true, '', '0', false, $ar = []];
$a = $arrEmpty[rand(0, 9)];
var_dump($a);

if (empty($a)) {
    echo 'true' . PHP_EOL;
} else {
    echo 'false' . PHP_EOL;
}
