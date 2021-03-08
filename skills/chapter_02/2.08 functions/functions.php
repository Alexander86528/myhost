<pre>
<?php
/*
$a = 10;
$b = null;

echo isset($a);//true
echo isset($b);//false
echo isset($c);//false
echo empty($var);
*/

//Для работы с массивами
$arr = array(
    "key1" => "value1",
    "key2" => 30
);
/*
var_dump(count($arr));
print_r($arr);
var_dump(array_pop($arr));//извлечение последнего элемента
print_r($arr);
var_dump(array_shift($arr));//извлекает первый элемент
print_r($arr);
array_push($arr, 30);//добавляет в конец массива элемент
print_r($arr);
array_unshift($arr, 'value1');
print_r($arr);
*/
var_dump(array_keys($arr));//выводит ключи массива в виде массива
var_dump(array_values($arr));//выводит элементы массива(значения)

var_dump(in_array('value1', $arr));//Проверяет есть ли такой элемент в массиве
var_dump(in_array(55, $arr));

var_dump(array_key_exists('key1', $arr));
var_dump(array_key_exists(10, $arr));





?>
</pre>