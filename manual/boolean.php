<?php

//$a_bool = true;

/*
Для явного преобразования в boolean, используйте (bool) или (boolean)
*/
//var_dump($a_bool);
/*
При преобразовании в boolean, 
следующие значения рассматриваются как FALSE
*/
//Пустая строка
var_dump((bool) "");
var_dump((bool) "0");
// и обратно:
echo (string)false . PHP_EOL; //''
var_dump((string)false);
echo (string)true . PHP_EOL;// '1'
var_dump((string)true);

// integer 0(ноль) и -0(минус ноль)
var_dump((bool) 0);
var_dump((bool) -0);

// float(double) 0.0(ноль) и -0.0(минус ноль)
var_dump((bool) 0.0);
var_dump((bool) -0.0);

// массив без элементов
var_dump((bool) array());

// особый тип NULL
var_dump((bool) NULL);

