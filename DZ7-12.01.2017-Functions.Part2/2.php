<?php
$array=array(5, 6.5, 10, 3.355, 400, 9.43);
$percent=-2;

function percent_correction(& $array, $percent)
{
	if ($percent<0){
		echo "Процент коррекции должен быть больше 0";
		die;
	}
	else{
		foreach ($array as $key=>$value){
		$value*=$percent;
		$array[$key]=$value;
		}
	return $array;
	}
}

percent_correction($array, $percent);
print_r ($array);
