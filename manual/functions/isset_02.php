<pre>
<?php
/*
Функция isset() c элементами массива.
*/
$array = [
    'test' => 1,
    'hello' => null,
    'pie' => [
        'a' => 'apple',
    ],
];

print_r($array);
var_dump($array);
echo "\n";

echo 'var_dump(isset($array[\'test\']));';
echo "\n";
var_dump(isset($array['test']));
echo "\n";

echo 'var_dump(isset($array[\'foo\']));';
echo "\n";
var_dump(isset($array['foo']));
echo "\n";

echo 'var_dump(isset($array[\'hello\']));';
echo "\n";
var_dump(isset($array['hello']));
echo "\n";
