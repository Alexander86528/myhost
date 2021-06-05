<p>Функция round(); Округляет число типа float.</p>
<p>
round ( int|float $num , int $precision = 0 , int $mode = PHP_ROUND_HALF_UP ) : float<br>
    Возвращает округлённое значение num с указанной точностью precision (количество цифр после запятой).<br>
    precision может быть отрицательным или нулём (по умолчанию).<br>
</p>
<?php
echo round(3.4);
echo '<br>';
echo round(3.5);
echo '<br>';
echo round(3.6);
echo '<br>';
echo round(2.12345, 3);
echo '<br>';
echo round(1234.1234, 2);
echo '<br>';
echo round(1234.1234);
echo '<br>';
echo round(1234.1234, -2);
echo '<br>';
