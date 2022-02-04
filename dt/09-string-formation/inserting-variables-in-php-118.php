<?php
echo '<p>examle 1<br>вставка в строку переменной</p>';
$str = 'bbb';

echo 'aaa' . ' ' . $str . ' ' . 'ccc' . '<br>';
echo "aaa $str ccc \n";


echo '<p>task 1 <br>упростить код</p>';
$user = 'name';

echo 'hello' . ' ' . $user . '<br>';
echo "hello $user \n";

echo '<p>example 2<br>Вставка в строку элемента массива.</p>';
$arr = ['b', 'c', 'd', ];

echo 'a' . ' ' . $arr[0] . ' ' . $arr[1] . ' ' . $arr[2] . ' ' . 'e' . '<br>';
echo "a $arr[0] $arr[1] $arr[2] e \n";

echo '<p>task 2<br>Упростить код.</p>';
$arr = ['1', '3', '5', ];

echo '0' . ' ' . $arr[0] . ' ' . '2' . ' ' . $arr[1] . ' ' . '4' . ' ' . $arr[2] . '<br>';
echo "0 $arr[0] 2 $arr[1] 4 $arr[2] \n";

echo '<p>example 3<br>Вставка в строку элементов ассоциативного массива.</p>';
$arr = ['1'=> 1, '3' => 3, '5' => 5];
print_r($arr);

echo '<p>Для вставки элементов ассоциативных массивов их необходимо обернуть в фигурные скобки:</p>';
echo "0 {$arr['1']} 2 {$arr['3']} 4 {$arr['5']} \n";

echo '<p>Либо можно снять одинарные кавычки с ключа при вставке:</p>';
echo "0 $arr[1] 2 $arr[3] 4 $arr[5] \n";

echo '<p>task 3<br>Упростить код</p>';
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo 'ассоциативный массив:<br>';
print_r($arr);
echo '<br>';
echo 'text' . $arr['a'] . ' text' . $arr['b'] . ' text' . $arr['c'] . '<br>';
echo "text$arr[a] text$arr[b] text$arr[c] \n";
