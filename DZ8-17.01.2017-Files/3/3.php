<?php
/*Дан файл со словами. Упорядочить слова по алфавиту.*/

if(file_exists('a.txt')){
	$file_a=str_replace(",", "", file_get_contents('a.txt')); //убираем знаки препинания
	$file_a=str_replace(".", "", $file_a);
}

$array_a=explode(" ", $file_a);
sort($array_a, SORT_NATURAL | SORT_FLAG_CASE); //сортировка без учета регистра
$sorted_string=implode(" ", $array_a);
/*echo "<pre>";
print_r($array_a);
echo"</pre>";*/

$result=fopen('result.txt', 'w');

fwrite($result, $sorted_string);

