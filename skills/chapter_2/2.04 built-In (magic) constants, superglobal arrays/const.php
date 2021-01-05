
<pre>
<?php


define('MY_FIRST_CONST', 10);
var_dump(MY_FIRST_CONST);
define('MY_FIRST_CONST', 20);//Не переопределилась!
var_dump(MY_FIRST_CONST);


echo 'Магические константы' . PHP_EOL;
echo 'Не чувствительны к регистру' . PHP_EOL;
var_dump(__FILE__);//Указывает путь до файла от корня
var_dump(__LINE__);//Выводит строку на которой использовалась
var_dump(__line__);//Не чувствительны к регистру
var_dump(__DIR__);//выводит путь к папке в которой лежит исполняемый файл
var_dump(__FUNCTION__);//выводит название исполняемой ф-ии
var_dump(__CLASS__);//выводит название исполняемого класса
var_dump(__METHOD__);//выводит название исполняемого метода
var_dump(__NAMESPACE__);//выводит название пространства имён


?>
</pre>