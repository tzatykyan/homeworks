<?php

/*11) Реализовать функцию closeToTen. функцию должна выводить на экран ближайшее к 10 из двух чисел, записанных в аргументах метода.*/

function closeToTen($a, $b){
	$first_difference=abs($a-10);
	$second_difference=abs ($b-10);
	echo "Ближайшее к 10 -";
	if($first_difference>=$second_difference){
		echo $b;
	}
	else{
		echo $a;
	}
	
}

closeToTen(9,12);