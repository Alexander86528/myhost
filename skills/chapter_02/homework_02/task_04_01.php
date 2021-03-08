<pre>
<?php

$title = 'Authors and books';
$red = (bool)rand(0, 1) ? $red = "red" : $red = " ";
//var_dump($red);

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

$numbersAuthors = count($result3['authors']);
//var_dump($numbersAuthors);
?>
</pre>
