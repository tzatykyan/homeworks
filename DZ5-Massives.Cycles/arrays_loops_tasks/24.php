<?php
$number=443567895532;
$control=5;
$count=0;

$arr_number=str_split($number);


foreach($arr_number as $digit){
	
	if ($digit==$control){
		$count++;
	}
}
echo $count;
