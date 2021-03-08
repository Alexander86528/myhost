<pre>
<?php
//isset — Определяет, была ли установлена переменная значением, отличным от NULL
//isset ( mixed $var [, mixed $... ] ) : bool
//Возвращает TRUE, если var определена и ее значение отлично от NULL, и FALSE в противном случае.

$a = null;
if (isset($a)) {
    echo 'true' . "\n";
} else {
    echo 'false' . "\n";//false
}

$a = '';
if (isset($a)) {
    echo 'true' . "\n";//true
} else {
    echo  'false' . "\n";
}
