<?php

function words ($a, $single, $two_four, $five){
	if ($a==1){
		$a= "$a $single";
	}
	elseif ($a==2 || $a==3 || $a==4){
		$a=  "$a $two_four";
	}
	elseif ($a==0 || $a>4){
		$a=  "$a $five";
	}
	return $a;
}

$result= words (3, "груша", "груши", "груш");
echo $result;

