<pre>
<?php

$a = 10;
$b = 7;
$c = true;
$d = 'string';

echo '<h4>Операторы не строгого сравнения == </h4>';
echo '$a == $b    ';
var_dump($a == $b);
echo '$a == 10    ';
var_dump($a == 10);
echo '$c == false    ';
var_dump($c == false);
echo '$d == \'string\'    ';
var_dump($d == 'string');
echo '1 == \'1\'    ';
var_dump(1 == '1');
echo '\'10\' == \'12\'    ';
var_dump('10' == '12');

echo '<h4>Операторы строгого сравнения === </h4>';
echo '$a === $b    ';
var_dump($a === $b);

echo '<h4> Оператор не равно != & !== </h4>';
$a1 = '10';
echo '$a != $a1    ' . "$a != '$a1'   ";
var_dump($a != $a1);
echo '$a !== $a1    ' . "$a !== '$a1'    ";
var_dump($a !== $a1);
echo '$a > $b    ' . "$a > $b    ";
var_dump($a > $b);
echo '7 > $b    ' . "7 > $b    ";
var_dump(7 > $b);

echo '<h4> Оператор строго больше > </h4>';
echo '\'asd\' > \'Asd\'    ';
var_dump('asd' > 'Asd');
echo '\'Asd\' > \'asd\'    ';
var_dump('Asd' > 'asd');
echo '\'ASD\' > \'asd\'    ';
var_dump('ASD' > 'asd');

echo '<h4>Оператор <=> </h4>';
var_dump(5 <=> 10);//-1
var_dump(10 <=> 10);//0
var_dump(10 <=> 5);//1
$e = 5;
$f = 10;
var_dump($e <=> $f);//-1
var_dump($e <=> 5);//0
var_dump($f <=> $e);//1
