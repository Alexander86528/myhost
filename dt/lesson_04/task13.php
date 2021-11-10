<?php
/*
Если переменная $var равна true, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $var, равном true, false. Напишите два варианта скрипта - с короткой записью и с длинной
*/
$arrayTest = [false, true];
$var = $arrayTest[rand(0, 1)];
var_dump($var);
/*
if ($var) {
    echo 'true';
} else {
    echo 'false';
}
*/
if($var) echo 'true'; else echo 'false';
