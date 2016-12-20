<?php

$number=811;
$sum=0;

$arr_number=str_split($number);

foreach($arr_number as $digit){
	$sum+=$digit;
}
echo $sum;