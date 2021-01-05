
<?php
// Массивы

// 1. Создайте массив numbers с тремя значениями - любыми целыми числами
// # Момент на видео 03:01
$numbers = [1, 2, 3];

// 2. Создайте массив lines с тремя значениями - любыми словами
// # Момент на видео 03:33
$lines = ['привет', 'я', 'массив'];

// 3. Создайте массив one c одним значением равным 8, ключом этого значения сделайте число 34
// # Момент на видео 06:23
$one = [34 => 8];

// 4. Даны следующие слова и описание к ним: мышь - это животное грызун, конь - скачет по полям, хрюшка - кушает желуди
// создайте массив словарь dictionary, содержащий три элемента. ключом элементам массива сделайте - имя животного, а значением - его описание
// # Момент на видео 07:49
$dictionary = [
    'мышь' => 'это животное грызун',
    'конь' => 'скачет по полям',
    'хрюшка' => 'кушает желуди',
];

// 5. Не очень хорошо, когда ключи массива содержат символы, не относящиеся к английскому языку
// переименуйте ключи в массиве dictionary, укажите вместо них английские названия животных
// # Создайте новый массив, поместив его в туже переменную
$dictionary = [
    'mouse' => 'это животное грызун',
    'horse' => 'скачет по полям',
    'pig' => 'кушает желуди',
];

// 6. Выведите массив $dictionary, известной вам функцией
var_dump($dictionary);

// 7. А теперь выведите отдельно описание мышки из массива dictionary
// # Момент на видео 10:33
var_dump($dictionary['mouse']);

// 8. А выведите описание хрюшки из массива dictionary
var_dump($dictionary['pig']);

// 9. А выведите третий элемент из массива numbers
var_dump($numbers[2]);

// 10. Мне не нравится это число, давайте в третий элемент массива numbers поместим число 3.14
// И выведите этот элемент, чтобы убедиться, что там именно наше новое число
// # Момент на видео 12:01
$numbers[2] = 3.14;
var_dump($numbers[2]);

// 11. Создайте массив days, состоящий из дней недели, сделайте ключи этого массива равными номеру дня в неделе от 1 до 7,
// а значениями - строку с названием дня, 1 - Понедельник, 2 - Вторник и т.д.
// # Если переопределить числовой ключ, то затем php будет продолжать их назначение от установленного значения
$days = [
    1 => 'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье',
];