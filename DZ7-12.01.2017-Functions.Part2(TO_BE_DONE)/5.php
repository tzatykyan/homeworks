<?php

$string="болвана в лоб";

function is_palindrom($string){
	
	$string_array=preg_split("//u", $string, -1, PREG_SPLIT_NO_EMPTY); //разбиваем заданную строку на массив символов
	
     $n=count($string_array)-1;	
	foreach ($string_array as $key=>$value){ //"переворачиваем" массив
		$string_array_reverse[$n--]=$value;
	}

	ksort($string_array_reverse); //сортируем массив, чтобы значения шли от 0 
	
	$reverse_string_raw = implode ($string_array_reverse); //склеиваем массив в строку
	$reverse_string_ready=str_replace(" ", "", $reverse_string_raw); //убираем пробелы из строки
	$given_string_ready=str_replace(" ", "", $string); //убираем пробелы из заданной строки
	
	/*echo $given_string_ready;
	echo "<br>";
	echo $reverse_string_ready;*/ //выводим на экран свои строки
	
	if ($given_string_ready==$reverse_string_ready){ //проверяем равноценность полученных строк
		echo "Это палиндром!";
	}
	else {
		echo "Это обычная фраза, увы :)";
	}
}

is_palindrom($string);
