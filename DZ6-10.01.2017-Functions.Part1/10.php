<?php

$b="Вот и строка";
$N=7;

function cut_symbols($a, $N){
	$array_a=preg_split("//u", $a, -1, PREG_SPLIT_NO_EMPTY);//разбивает многобайтную (кириллическую) строку на символы
	foreach ($array_a as $key=>$value){
		if($key>=0 && $key<=$N){
	$new_array[]=$value;//создаем новый массив символов, ограниченный заданным числом $N
	}
	$a=implode (" ", $new_array); //склеиваем элементы массива в строку, с разделителем в виде пробела
	}
return "$a...";
}

$result=cut_symbols($b, $N);
print_r ($result);

