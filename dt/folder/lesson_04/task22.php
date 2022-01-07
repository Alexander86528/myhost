<?php
/*
В переменной $year хранится год. Определите, является ли он високосным (в таком году есть 29 февраля). Год будет високосным в двух случаях: либо он делится на 4, но при этом не делится на 100, либо делится на 400. Так, годы 1700, 1800 и 1900 не являются високосными, так как они делятся на 100 и не делятся на 400. Годы 1600 и 2000 - високосные, так как они делятся на 400.
*/
$year = rand(2000, 2040);
var_dump($year);

if ($year % 4 != 0) {
    var_dump('Not a leap year');
} elseif ($year % 100 != 0) {
    var_dump('Bissextile');
} elseif ($year % 400 == 0) {
    var_dump('Bissextile');
} else {
    var_dump('Not a leap year');
}

if ($year % 4 == 0 and $year % 100 != 0 or $year % 400 == 0 ) {
    var_dump('Bissextile');
} else {
    var_dump('Not a leap year');
}
