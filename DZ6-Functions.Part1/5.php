<?php

$b=888;

function even_number(int $a){
	if ($a%2==0){
		return "число четное";
	}
	else{
		return "число нечетное";
	}
}

$result=even_number($b);

echo $result;