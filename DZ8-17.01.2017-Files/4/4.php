<?php
/*Дан файл. Каждая строка содержит имя, пароль и email, разделенные символами ':' (двоеточие). Удалить строки с повторами email. Удалить строки, в которых имена совпадают.*/

if(file_exists('a.txt')){
	$file_a=file('a.txt'); //считываем построчно файл а
	}

foreach($file_a as $user_array){
	$array_file_a[]=explode(":", $user_array); //разбиваем его на юзер массивы
}

$number_ofkeys_file_a=count($file_a); 

foreach($array_file_a as $key=>$user_data){ 
	$etalon_email=$array_file_a[$key]['2']; //на каждой итерации присваиваем имейл эталону, с которым будем сравнивать последующие имейлы
	$etalon_name=$array_file_a[$key]['0'];
	$next_key=$key+1; //нам нужен ключ к имейлу и имени в следующем юзер массиве
			
		if ($next_key<($number_ofkeys_file_a)){ //идем до конца массива
			
			if($array_file_a[$next_key]['2']!=$etalon_email && $array_file_a[$next_key]['0']!=$etalon_name){ //если следующий имел не равен эталонному и следующее имя не равно эталонному
				$array_without_dublicates[]=$user_data; //записываем юзер массивы в новый массив
			}
			
		}
}

foreach ($array_without_dublicates as $value){ //собираем массив обратно
$file_b_array[]=implode(':',$value);
}

$result=fopen('result.txt', 'w'); 
foreach($file_b_array as $value){
	fwrite($result,$value.PHP_EOL); //записываем в файл построчно с переносом строки
}
