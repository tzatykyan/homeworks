<?php
if(file_exists('a.txt')){
	$file_a=file('a.txt');
	}

foreach($file_a as $user_array){
	$array_file_a[]=explode(":", $user_array);
}

$number_ofkeys_file_a=count($file_a);

foreach($array_file_a as $key=>$user_data){ 
	$next_key=$key+1; //нам нужен ключ к имейлу в следующем юзер массиве
	$etalon_email=$array_file_a[$key]['2']; //на каждой итерации присваиваем имейл эталону, с которым будем сравнивать последующие имейлы
	$etalon_name=$array_file_a[$key]['0'];
			
		if ($next_key<($number_ofkeys_file_a)){ //идем до конца массива
			
			if($array_file_a[$next_key]['2']!=$etalon_email && $array_file_a[$next_key]['0']!=$etalon_name){ //если следующий имел не равен эталонному
				$array_without_email_dublicates[]=$user_data; //записываем юзер массивы в новый массив
			}
			
		}
}

foreach ($array_without_email_dublicates as $value){ //собираем массив обратно
$file_b_array[]=implode(':',$value);
}

$result=fopen('c.txt', 'w'); 
foreach($file_b_array as $value){
	fwrite($result,$value.PHP_EOL); //записываем в файл построчно с переносом строки
}
