<?php

//переменные типа string.
$helloWorld = "Hello, world! ";
echo $helloWorld . PHP_EOL;
var_dump($helloWorld);

//переменные типа boolean.
$isWinner = true;
$isAuthorized = false;
var_dump($isWinner);
var_dump($isAuthorized);

//переменные типа integer.
$numberTen = 10;
$minusTen = -10;
var_dump($numberTen);
var_dump($minusTen);

$decimalInt = 255;
$octimalInt = 0377;
$hexadecimalInt = 0xFF;
var_dump($decimalInt);
var_dump($octimalInt);
var_dump($hexadecimalInt);

//переменные типа double.
$duobleVariable = 1.5;
var_dump($duobleVariable);
//простой способ определения переменной double.
$simple = 10.34;
//Экспоненциальная форма переменной double.
$duobleVariableExp1 = 1.34e5;
$duobleVariableExp2 = 1.34E-5;
var_dump($duobleVariableExp1);
var_dump($duobleVariableExp2);

//Строки (бывают в " " и в '')
$string1 = "string1 $duobleVariableExp1";
$string2 = 'string2 $duobleVariableExp1';
var_dump($string1);
var_dump($string2);

//Переопределение типов. 
$integerStringVariable = 100;
var_dump($integerStringVariable);
$integerStringVariable = 'String';
var_dump($integerStringVariable);
