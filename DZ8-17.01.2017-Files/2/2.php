<?php


if(file_exists('a.txt')&& file_exists('b.txt')){
	$file_a=trim(str_replace(". ", ".", file_get_contents('a.txt')));

	$file_b=str_replace(". ", ".", file_get_contents('b.txt'));
}

print_r ($file_a);

$file_c=fopen('c.txt', 'w'); 

$array_a=explode('.',$file_a);
$array_b=explode('.',$file_b);
echo "<pre>";
print_r($array_a);
print_r($array_b);

$unique_array=array_unique(array_merge($array_a, $array_b));

print_r($unique_array);

$unique_sentences=implode('. ', $unique_array);
print_r($unique_sentences);
echo "</pre>";

fwrite($file_c, $unique_sentences);