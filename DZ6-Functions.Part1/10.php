<?php

$b="Вот и строка";
$N=7;

function cut_symbols($a, $N){
	$array_a=preg_split("//u", $a, -1, PREG_SPLIT_NO_EMPTY);
	foreach ($array_a as $key=>$value){
		if($key>=0 && $key<=$N){
	$new_array[]=$value;
	}
	$a=implode (" ", $new_array);
	}
return "$a...";
}

$result=cut_symbols($b, $N);
print_r ($result);

