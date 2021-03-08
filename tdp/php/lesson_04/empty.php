<pre>
<?php
//empty(mixed $var) : bool - проверяет пустая ли переменная
//возвращает TRUE, если var пустая
//Возвращает FALSE, если var существует и содержит непустое ненулевое значение.

$a = '';//пустая строка
if (empty($a)) {
    echo 'true' . "\n";//true
} else {
    echo 'false' . "\n";
}

$a = 0;
if (empty($a)) {
    echo 'true' . "\n";//true
} else {
    echo 'false' . "\n";
}

$a = 0.0;
var_dump($a);
if (empty($a)) {
    echo 'true' . "\n";//true
} else {
    echo 'false' . "\n";
}

$a = '0';
if (empty($a)) {
    echo 'true' . "\n";//true
} else {
    echo 'false' . "\n";
}

$a = null;
if (empty($a)) {
    echo 'true' . "\n";//true
} else {
    echo 'false' . "\n";
}

$a = false;
if (empty($a)) {
    echo 'true' . "\n";//true
} else {
    echo 'false' . "\n";
}

$a = [];
if (empty($a)) {
    echo 'true' . "\n";//true
} else {
    echo 'false' . "\n";
}
