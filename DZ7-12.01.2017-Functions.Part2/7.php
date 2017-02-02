<?php
/*7) Напишите функцию, которая реализует алгоритм 'решето Эратосфена' для поиска простых чисел в заданном промежутке. Алгоритм найдите самостоятельно в поисковых системах.*/

$start_point=2;
$end_point=30;


function eratosfen ($start_point, $end_point){
	
	for ($i=$start_point; $i<=$end_point; $i++){
		$array[]=$i;
	}
	
	$count=count($array);
	foreach ($array as $key=>$value){
		for ($key=$key+1; $key<$count; $key++){
			if (array_key_exists($key, $array)){
				if ($array[$key]%$value==0){
					unset ($array[$key]);
				}
			}
		}
	}
	return implode (" ", $array);
}

print_r(eratosfen($start_point, $end_point));

 

