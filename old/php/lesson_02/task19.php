<?php
/*
Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, *=, /=. Количество строк кода при этом не должно измениться.

$var = 10;
$var = $var + 7;
$var = $var + 1;
$var = $var - 1;
$var = $var + 12;
$var = $var * 7;
$var = $var - 15;
echo $var;
*/
$var = 10;

$var += 7;
var_dump($var);
$var++;
var_dump($var);
$var--;
var_dump($var);
$var += 12;
var_dump($var);
$var *= 7;
var_dump($var);
$var -= 15;
var_dump($var);
