<pre>
<?php

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
    echo 'Книгу ' . '\'' . $booksKey['bookTitle'] . '\''
     . ' написал ' . $result3['authors'][$booksKey['email']]['fio']
     . ', ' . $result3['authors'][$booksKey['email']]['birthYear'] . ' года рождения '
     . '(' . $booksKey['email'] . ').'
     . PHP_EOL;
}
