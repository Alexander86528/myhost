<?php

// 1. Создайте переменную с названием b содержащую boolean значение "ложь"
// # Момент на видео 10:20
$b = false;

// 2. Создайте переменную с названием isLessonCompleted. И поместите в эту переменную значение "истина"
// # Момент на видео 10:20
$isLessonCompleted = true;

// 3. Создайте переменные с названием number1 и number2. И поместите в них различные целые числа (значения придумайте)
// # Момент на видео 12:29
$number1 = 7;
$number2 = 10;

// 4. Выведите сумму чисел 3 и 4, вместе с типом получившегося значения
// # Момент на видео 10:27
// # Функция var_dump() выводит не только само значение, но и его тип
var_dump(3 + 4);

// 5. Создайте переменную x, и поместите в него число с плавающей точкой 7.3
// # Момент на видео 15:32
$x = 7.3;

// 6. Создайте переменную result, и поместите результат сложения переменных x и number1 и выведите его вместе с типом
// # используйте var_dump, обратите внимание на тип данных
$result = $x + $number1;
var_dump($result);

// 7. Создайте переменные line1, line2, line3 и поместите в них три разные строки.
// # Момент на видео 18:17
$line1 = 'Hello';
$line2 = 'World';
$line3 = ', ';

// 8. Создайте переменную line представляющую собой конкатенацию этих трех переменных в указанном порядке line1, line3, line2
// # Здесь нужно заглянуть чуть наперед и узнать что такое конкатенация и как она реализуется.
// # Конкатенация - это склеивание (сложение) строк, когда к одной строке пристыковывают (конкатенируют) другую
// # в php это оператор . (точка)
$line = $line1 . $line3 . $line2;


