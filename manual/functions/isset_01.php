<pre>
<?php

$var = '';
if (isset($var)) {
    echo "если переменная определена, то этот текст напечатается \n";
}
var_dump(isset($var));
echo "\n";

$a = "test1";
$b = "test2";

echo '$a = ' . $a . "\n";
var_dump(isset($a));
echo '$b = ' . $b . "\n";
var_dump(isset($b));
echo "\n";

unset ($a);
echo '$a = ';
var_dump($a);
var_dump(isset($a));
var_dump($a);
var_dump($b);
var_dump(isset($a, $b));
echo "\n";

$c = null;
echo '$c = ' . $c;
var_dump($c);
var_dump(isset($c));
