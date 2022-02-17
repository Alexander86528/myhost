<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

echo "<a href='index.php'>03-conditions, index.php</a>";
echo '<br>';
// $test = false;
// $test = '';
// $test = 0;
$test = '0';
// $test = null;

if (empty($test)) {
  echo '<strong style="color:red;">Пусто</strong> <br>';
} else {
  echo 'Не пусто <br>';
}

var_dump($test);