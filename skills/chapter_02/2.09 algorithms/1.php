<?php

//Задача по перестановке значений двух переменных
$a = 1;
$b = 5;
var_dump($a, $b);

$tmp = $a;
$a = $b;
$b = $tmp;
var_dump($a, $b);

[$a, $b] = [$b, $a];
var_dump($a, $b);
