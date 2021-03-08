<pre>
<?php
/*
Задание 6
Создайте переменную $studentsCount — присвойте ей случайное значение от 1 до 1000000.
Создайте программу, которая выведет в нужной форме текстовое сообщение, например такие “на учебе 100 студентов”, или “на учебе 2 студента” и т.д.
*/

$studentsCount = rand(1, 1000000);

$num1 = $studentsCount % 100;
$num2 = $studentsCount % 10;

if ($num1 >= 5 && $num1 <= 20) {
    $studentsNumerals = 'студентов';
} elseif ($num2 == 1) {
    $studentsNumerals = 'студент';
} elseif ($num2 >= 2 && $num2 <= 4) {
    $studentsNumerals = 'студента';
} else {
    $studentsNumerals = 'студентов';
}

echo 'Сегодня присутствуют ' . $studentsCount . ' ' . $studentsNumerals . "\n";

?>
</pre>
