<?php
/*1)Даны два файлы со словами, разделенными пробелами. Создать новый файл, содержащий: а) строки, которые встречаются только в первом файле б) строки, которые встречаются в обоих файлах; в) строки, которые встречаются в каждом файле более двух раз.*/

if(file_exists('a.txt')&& file_exists('b.txt')){
	$file_a=file_get_contents('a.txt');
	$file_b=file_get_contents('b.txt');
}
else{
	echo "Файлы не найдены";
}

$file_c=fopen('c.txt', 'w'); //создаем файл

$array_file_a=explode(' ', $file_a); //создаем массив из подстрок, разделитель - пробел
$array_file_b=explode(' ', $file_b);

foreach ($array_file_a as $string_a){
	if(!in_array($string_a, $array_file_b)){ //ищем значения первого массива во втором
		$array_only_a[]=$string_a; //если значения не найдены, записываем их в новый массив
	}
	else {
		$array_inboth[]=$string_a;
	}
	
}
$i=0;

$count_a=array_count_values($array_file_a); //возвращаем элементы и их количество
$count_b=array_count_values($array_file_b);


foreach($count_a as $key_a=>$value_a){ //ищем элементы, которых больше 2х в каждом массиве
	foreach ($count_b as $key_b=>$value_b){
		if (($value_a>2) && ($value_b>2) && ($key_a==$key_b)){
			$array_inboth_2times[]=$key_a;
		}
	}
}


$string_only_a="Это строки, которые встречаются только в первом файле: ".implode(' ', $array_only_a); //составляем строку из нового массива
$string_inboth="Это строки, которые встречаются в обоих файлах: ". implode(' ', array_unique($array_inboth));

$string_inboth_2times="Эти строки есть в  обоих файлах более 2х раз:". implode(' ', $array_inboth_2times); 

fwrite($file_c, $string_only_a); //записывае строку в файл
fwrite($file_c, $string_inboth);
fwrite ($file_c, $string_inboth_2times);




