<pre>
<?php

$a = '0';
//переменная строка
if ($a == 0) {
    echo 'true' . '<br>';//равно по значению
} else {
    echo 'false' . '<br>';
}

if ($a === 0) {
    echo 'true' . '<br>';
} else {
    echo 'false' . '<br>';//равно по значению, но не равно по типу
}

// не равно != и !==
if ($a != 0) {
    echo 'true';
} else {
    echo 'false' . "\n";//неверно тк равно по значению после приведения типов
}

if ($a !== 0) {
    echo 'true' . "\n";//верно тк не равно по типу
} else {
    echo 'false';
}

$a = 0;
if ($a != 0) {
    echo 'true';
} else {
    echo 'false' . "\n";//false
}

$a = 1;
if ($a != 0) {
    echo 'true' . "\n";//true
} else {
    echo 'false';
}
