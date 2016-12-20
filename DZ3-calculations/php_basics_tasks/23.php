<?php
echo "Вывод текста с помощью echo.<br>";
print "Вывод текста с помощью print.<br>";

var_dump ("text view with var dump. cyrillic - кириллица.<br>");
var_dump ("еще один кириллический текст");

//еще так можно
echo <<<DEF

А вот это текст,
отформатированный
в хередок. вот так
DEF;

