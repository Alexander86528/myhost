<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');

$test = null;

var_dump($test);
echo '<br>';

if ($test === null) {
  echo 'yes-true<br>';
} else {
  echo 'no false<br>';
}

echo '<br>';
echo 'isset($test)<br>';
echo 'isset() - Возвращает true, если var определена и её значение отлично от null, и false в противном случае';
echo '<br>';
var_dump(isset($test));
echo '<br>';
if (isset($test)) {
  echo 'true <br>';
} else {
  echo 'false <br>';
}
echo '<br>';

echo '!isset($test)<br>';
if (!isset($test)) {
  echo 'true<br>';
} else {
  echo 'false<br>';
}
echo '<br>';

echo 'array<br>';
$array = [
  'a' => 2, 
  'b' => 3,
  'c' => 4,
  'd' => 5
];
if (isset($array['d'])) {
  echo 'true<br>';
} else {
  echo 'array or element does not exist<br>';
}
echo '<br>';

echo '<h3>task 8</h3>';
echo '$array = [1, 2, 3, ];<br>';
echo 'isset($array[])<br>';
$array1 = [
  1,
  2,
  3,
];
echo '<pre>';
print_r($array1);
echo '</pre>';
if (isset($array1[10])){
  echo 'true<br>';
} else {
  echo 'false<br>';
}
echo '<br>';