<pre>
<?php

$a = true;
$b = false;
$c = true;

echo 'логическое $$';
echo "\n";
var_dump($a && $b);
var_dump($a && $c);
var_dump($b && $c);

echo 'логическое ||';
echo "\n";
var_dump($a || $b);
var_dump($a || $c);
var_dump($b || $c);

echo 'логическое xor ';
echo "\n";
var_dump($a xor $b);
var_dump($a xor $c);
var_dump($b xor $c);
var_dump($a xor $b xor $c xor false);

echo 'логическое не !';
echo "\n";
var_dump(!$a);
var_dump(!$b);
var_dump(!$c);

echo 'побитовые операторы';
echo "\n";
$a = 170;
$b = 240;
var_dump(decbin($a));
var_dump(decbin($b));
var_dump(decbin($a & $b));
var_dump(decbin($a | $b));
var_dump(decbin($a ^ $b));
var_dump(decbin(~$a));
var_dump(decbin(~$b));
var_dump(decbin($a << 1));
var_dump(decbin($a >> 1));

$a = 10;
var_dump($a);
$b = $a++;
var_dump($a);
var_dump($b);

$a = 10;
var_dump($a);
$b = ++$a;
var_dump($a);
var_dump($b);

echo 'Тернарный оператор';
echo "\n";
$a = true;
$b = $a ? 'В переменной $a хранится значение true' : 'В переменной $a хранится значение false';
echo "\n";
var_dump($b);

$a = 10;
$c = $a ?: 'Не хорошо';// $c = $a ? $a : 'Не хорошо';
var_dump($c);

$d = $a ?? 'Такого нет';
$e = $myVariable ?? 'Такого нет';
var_dump($d);
echo "\n";
var_dump($e);
echo "\n";

?>
</pre>