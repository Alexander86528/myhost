<pre>
<?php

$word = 'Hello World';
var_dump($word);

$word = substr($word, strlen($word) - 1, 1) . substr($word, 0, strlen($word) - 1);
var_dump($word);

?>
</pre>