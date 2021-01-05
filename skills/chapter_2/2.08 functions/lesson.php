<pre>
<?php
//require 'var.php';
var_dump(__DIR__ . '/var.php');
include_once __DIR__ . '/var.php';
var_dump($a);
var_dump(__DIR__ . '/inc.php');
include_once 'inc.php';
var_dump($a);
?>
</pre>