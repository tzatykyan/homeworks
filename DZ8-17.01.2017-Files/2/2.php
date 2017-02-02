<?php
/*2)Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.*/

if(file_exists('a.txt')&& file_exists('b.txt')){
	$file_a=trim(str_replace(". ", ".", file_get_contents('a.txt')));

	$file_b=str_replace(". ", ".", file_get_contents('b.txt'));
}

print_r ($file_a);


$array_a=explode('.',$file_a);
$array_b=explode('.',$file_b);
echo "<pre>";
print_r($array_a);
print_r($array_b);

$unique_array=array_unique(array_merge($array_a, $array_b));



foreach ($unique_array as $key=>&$value){
	if ($value==""){
		unset($unique_array[$key]);
	}
	}
	print_r($unique_array);

unset($value);
$unique_sentences=implode('. ', $unique_array);
print_r($unique_sentences);
echo "</pre>";
$file_c=fopen('c.txt', 'w'); 
fwrite($file_c, $unique_sentences);