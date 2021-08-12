<pre>
<?php

/*
trim — Удаляет пробелы (или другие символы) из начала и конца строки
*/

/*
По порядку с начала и с конца
*/

$text = "\t\tThese are a few words :) ... ";
$binary = "\x09Example string\x0A";
$hello = "Hello, World!";

var_dump($text, $binary, $hello);

print "\n";

$trim_text = trim($text);
var_dump($trim_text);

$trim_text = trim($text, " \t.):");
var_dump($trim_text);

$trim_hello = trim($hello, "Hell!dlro");
var_dump($trim_hello);

/*
Удаляем управляющие ASCII-символы с начала и конца $binary (от 0 до 31 включительно).
*/
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);
