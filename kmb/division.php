<?php

//for the console
$x = 12345;
$y = 12345.0;
$z = 12345;

echo '$x = ';
var_dump($x);
echo '$y = ';
var_dump($y);
echo '$z = ';
var_dump($z);

//var_dump($x / 10);
//intdiv() — Целочисленное деление.
//var_dump(intdiv($x , 10));
//var_dump(PHP_INT_MAX);
//var_dump(PHP_INT_MIN);
//var_dump($x % 10);

while ($x != 0) {
    echo intdiv($x, 10) . '   ' . $x % 10 . PHP_EOL;
    $x = intdiv($x, 10);
}

echo '$z / $y = ' . $z / $y . PHP_EOL;
var_dump($z / $y);
