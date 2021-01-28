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
echo '1) $result3[\'books\']' . "\n";
print_r($result3['books']);
echo "\n";
print_r($result3['books'][0]);
echo "\n";
print_r($result3['books'][0]['bookTitle']);
echo "\n";
print_r($result3['books'][0]['email']);
echo "\n\n";

echo '2) $result3[\'authors\']' . "\n";
print_r($result3['authors']);
echo "\n";
print_r($result3['authors']['alexandrov@email']);
echo "\n";
print_r($result3['authors']['alexandrov@email']['fio']);
echo "\n";
print_r($result3['authors']['alexandrov@email']['birthYear']);
echo "\n\n";

echo '3) foreach' . "\n";
foreach ($result3['books'] as $booksKey) {
    echo 'Книгу ' . $booksKey['bookTitle'] . ' написал ';
    echo $result3['authors'][$booksKey['email']]['fio'] . ' ';
    echo $result3['authors'][$booksKey['email']]['birthYear'];
    echo ' (' . $booksKey['email'] . ') ' . "\n";
}

shuffle($result3['books']);
print_r($result3);
echo '3) foreach' . "\n";
foreach ($result3['books'] as $booksKey) {
    echo 'Книгу ' . $booksKey['bookTitle'] . ' написал ';
    echo $result3['authors'][$booksKey['email']]['fio'] . ' ';
    echo $result3['authors'][$booksKey['email']]['birthYear'];
    echo ' (' . $booksKey['email'] . ') ' . "\n";
}