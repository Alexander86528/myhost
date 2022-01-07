
<?php
/*
Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
*/
$hour = strftime('%H');
$minutes = strftime('%M');
$second = strftime('%S');

echo $hour . ":" . $minutes . ':' . $second . PHP_EOL;
