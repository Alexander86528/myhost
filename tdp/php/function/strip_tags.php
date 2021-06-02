<p>
Функция strip_tags удаляет HTML теги из строки, не трогая их содержимого.<br>
Вторым необязательным параметром можно указать разрешенные теги - они не будут удалены.<br>
Их указываем в таком формате: '<b>' или '<b>', если хотим оставить несколько тегов.<br>
</p>
<p>
    Синтаксис: <br>
strip_tags(строка, [разрешенные теги]);<br>
</p>
<?php
    echo strip_tags('lorem <b>ipsum</b> dolor sit amet');