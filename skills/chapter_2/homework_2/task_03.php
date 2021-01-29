<pre>
<?php
/*
Задание 3
Для этой задачи возьмите предыдущий массив, положите его в переменную $result3 (Ctrl + C -> Ctrl + V). Ключами для каждого из авторов сделайте их email — чтобы на основе email автора у книги можно было получить автора. И теперь добавьте каждому автору еще и год рождения.
Выведите информацию по всем книгам, в формате:
“Книга <Название книги>, ее написал <Фио автора> <Год Рождения автора> (<email автора>)”
Затем перемешайте (Найдите подходящую функцию) книги и снова выведите информацию по книгам.
*/

$result3 = [
    'authors' => [
        'alexandrov@email' => [
            'fio' => 'Александр Александрович Александров',
            'birthYear' => '1970',
        ],
        'borisov@email' => [
            'fio' => 'Борис Борисович Борисов',
            'birthYear' => '1980',
        ],
        'vasilyev@email' => [
            'fio' => 'Василий Васильевич Васильев',
           'birthYear' => '1990',
        ],
    ],
    'books' => [
        [
            'bookTitle' => 'Книга Александра',
            'email' => 'alexandrov@email',
        ],
        [
            'bookTitle' => 'Книга Бориса',
            'email' => 'borisov@email',
        ],
        [
            'bookTitle' => 'Книга Василия',
            'email' => 'vasilyev@email',
        ],
    ],
];   

foreach ($result3['books'] as $booksKey) {
    echo 'Книгу ' . '\'' . $booksKey['bookTitle'] . '\'' . ' написал ';
    echo $result3['authors'][$booksKey['email']]['fio'] . ', ';
    echo $result3['authors'][$booksKey['email']]['birthYear'] . ' года рождения ';
    echo '(' . $booksKey['email'] . ') ' . PHP_EOL;
}

echo 'shuffle' . PHP_EOL;
shuffle($result3['books']);
foreach ($result3['books'] as $booksKey) {
    echo 'Книгу ' . '\'' . $booksKey['bookTitle'] . '\'' . ' написал ';
    echo $result3['authors'][$booksKey['email']]['fio'] . ', ';
    echo $result3['authors'][$booksKey['email']]['birthYear'] . ' года рождения ';
    echo '(' . $booksKey['email'] . ') ' . PHP_EOL;
}
?>
</pre>

