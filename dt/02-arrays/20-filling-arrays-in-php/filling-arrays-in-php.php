<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20. Заполнение массивов в php</title>
</head>
<body>
  <h1>Заполнение массивов в PHP</h1>
  <p>
    Элементы в массив не обязательно добавлять сразу в момент объявления этого массива. Можно вначале объявить этот массив пустым, а затем добавить в него необходимые элементы, вот так:
  </p>
  <h2>example 1</h2>
  <pre>
    &lt;?php
      $arr = [];     // создаем пустой массив
      $arr[] = 'a';  // элемент добавится в ключ 0
      $arr[] = 'b';  // элемент добавится в ключ 1
      $arr[] = 'c';  // элемент добавится в ключ 2
    	
      var_dump($arr); // выведет ['a', 'b', 'c']
    ?&gt;
  </pre>
  <p>
    Массив не обязательно должен быть изначально пустым - там уже что-то может быть, но мы все равно можем добавлять новые элементы:
  </p>
  <pre>
  &lt;?php
    $arr = ['a', 'b', 'c']; // объявляем массив с элементами

    $arr[] = 'd'; // элемент добавится в ключ 3
    $arr[] = 'e'; // элемент добавится в ключ 4

    var_dump($arr); // выведет ['a', 'b', 'c', 'd', 'e']
  ?&gt;
  </pre>

  <h2>Task 1</h2>
  <p>
    Пусть дан пустой массив:
    <pre>
      &lt;?php
        $arr = [];
      ?&gt;
    </pre>
     Описанным способом заполните этот массив элементами со значениями 1, 2, 3, 4 и 5.
  </p>
  <?php
    $array = [];
    $array[] = 1;
    $array[] = 2;
    $array[] = 3;
    $array[] = 4;
    $array[] = 5;
    echo '<pre>';
    print_r($array);
    echo '</pre>';
  ?>

  <h2>Task 2</h2>
  <p>
    Пусть дан такой массив:
    <pre>
    &lt;?php
      $arr = [1, 2, 3];
    ?&gt;
    </pre>
    Добавьте ему в конец элементы 4 и 5.
  </p>
  <?php
    $array = [1, 2, 3];
    $array[] = 4;
    $array[] = 5;
    echo '<pre>';
    print_r($array);
    echo '</pre>';
  ?>

  <h2>Task 3</h2>
  <p>Пусть дан пустой массив.</p>
  <p>Описанным способом в ключ 'year' запишите текущий год, в ключ 'month' - текущий месяц, а в ключ 'day' - текущий день.</p>
  <?php
  $array3 = [];

  var_dump($array3);
  echo '<br>';
  /*
  $array3['year'] = date('Y');
  $array3['month'] = date('F');
  $array3['day'] = date('d');
  */
  $array3['year'] = strftime('%Y');
  $array3['month'] = strftime('%B');
  $array3['day'] = strftime('%A');
  $array3['time'] = strftime('%R');
  //var_dump($array3);
  echo '<pre>';
  print_r($array3);
  echo '</pre>';
  echo '<br>';
  ?>
</body>
</html> 
