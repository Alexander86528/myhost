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
//print_r($result3);

/*
echo 'Книгу ' . '\'' . $result3['books'][0]['bookTitle'] . '\''
 . ', написал ' . $result3['authors']['alexandrov@email']['fio']
 . ', ' . $result3['authors']['alexandrov@email']['birthYear'] . ' года рождения '
 . '(' .  $result3['books'][0]['email'] . ').';
echo "\n";
*/
/*
echo 'Книгу ' . '\'' . $result3['books'][1]['bookTitle'] . '\''
 . ', написал ' . $result3['authors']['borisov@email']['fio']
 . ', ' . $result3['authors']['borisov@email']['birthYear'] . ' года рождения '
 . '(' .  $result3['books'][1]['email'] . ').';
echo "\n";
*/
/*
echo 'Книгу ' . '\'' . $result3['books'][2]['bookTitle'] . '\''
 . ', написал ' . $result3['authors']['vasilyev@email']['fio']
 . ', ' . $result3['authors']['vasilyev@email']['birthYear'] . ' года рождения '
 . '(' .  $result3['books'][2]['email'] . ').';
echo "\n";
*/

var_dump($result3['books']);
echo "\n";
var_dump($result3['books'][0]);
echo "\n";
var_dump($result3['books'][0]['bookTitle']);
echo "\n";
var_dump($result3['books'][0]['email']);
echo "\n";

print_r($result3['authors']);
echo "\n";
print_r($result3['authors']['alexandrov@email']);
echo "\n";
print_r($result3['authors']['alexandrov@email']['fio']);
echo "\n";
print_r($result3['authors']['alexandrov@email']['birthYear']);
echo "\n";

foreach ($result3['books'] as $booksKey) {
    echo 'Книгу ' . '\'' . $booksKey['bookTitle'] . '\''
     . ' написал ' . $result3['authors'][$booksKey['email']]['fio']
     . ', ' . $result3['authors'][$booksKey['email']]['birthYear'] . ' года рождения '
     . '(' . $booksKey['email'] . ').'
     . PHP_EOL;
}
