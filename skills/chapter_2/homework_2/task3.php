<pre>
<?php
$result3 = [
    'authors' => [
        'aleksandrov@email' => [
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
print_r($result3);


var_dump($result3);
echo 'Книгу ' . '\'' . $result3['books'][0]['bookTitle'] . '\'' . ', написал ' . $result3['authors']['aleksandrov@email']['fio'] . ', ' . $result3['authors']['aleksandrov@email']['birthYear'] . ' года рождения' . '(' .  $result3['books'][0]['email'] . ').';
echo "\n";
echo 'Книгу ' . '\'' . $result3['books'][1]['bookTitle'] . '\'' . ', написал ' . $result3['authors']['borisov@email']['fio'] . ', ' . $result3['authors']['borisov@email']['birthYear'] . ' года рождения' . '(' .  $result3['books'][1]['email'] . ').';
echo "\n";
echo 'Книгу ' . '\'' . $result3['books'][2]['bookTitle'] . '\'' . ', написал ' . $result3['authors']['vasilyev@email']['fio'] . ', ' . $result3['authors']['vasilyev@email']['birthYear'] . ' года рождения' . '(' .  $result3['books'][2]['email'] . ').';