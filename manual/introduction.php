<?php
//Мануал введение.
$a_bool = true;
$a_str = "foo";
$a_str2 = 'foo';
$an_int = 12;

/*
Если для отладки необходимо просто удобочитаемое представление типа, то
используйте gettype().
*/

echo gettype($a_bool) . PHP_EOL;
echo gettype($a_str) . PHP_EOL;

/*
Чтобы проверить на определенный тип, не используйте gettype(), 
применяйте для этого функции is_type.
*/

 //Если это целое, то увеличить на 4.
if (is_int($an_int)){
    $an_int += 4;
}
else {
    echo 'это не integer' . PHP_EOL;
}
echo '$an_int = ' . $an_int . PHP_EOL;

// Если $a_bool - это строка, вывести её. 
if(is_string($a_bool)){
    echo "Строка: $a_bool";
}
?>
