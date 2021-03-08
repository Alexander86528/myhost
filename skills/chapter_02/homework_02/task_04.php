<?php
require 'task_04_01.php'
/*
Задание 4
Возьмите массив из задания 3, создайте переменную $title — в нее впишите любую строку — это будет заголовок страницы.
Также создайте переменную boolean типа $red = (bool) rand(0, 1);
Сформируйте небольшую веб-страницу (верстка приложена), у которой будет заголовок, и в абзацах выведены книги в том же формате, что и в задании 3. Каждая книга должна быть в отдельном абзаце.
Интегрируйте код в приложенную верстку, при этом если переменная $red истинна — необходимо к заголовку h1 добавить атрибут class=”red” (файл.php в прикрепленных материалах)
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
<h1 class=<?= $red ?>><?= $title ?></h1>
<div>Авторов на портале <?=$numbersAuthors?></div>
<!-- Выведите все книги -->
<?php
foreach ($result3['books'] as $booksKey) {
?>
    <p>
    Книгу '<?=$booksKey['bookTitle']?>' написал
    <?=$result3['authors'][$booksKey['email']]['fio']?>,
    <?=$result3['authors'][$booksKey['email']]['birthYear']?> года рождения
    (<?=$booksKey['email']?>).
    </p>
<?php
}
?>

</body>
</html>
