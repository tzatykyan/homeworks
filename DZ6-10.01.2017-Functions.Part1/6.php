<?php

$a=8;
function number_month ($a){
	switch ($a):
	case 1: $a="Январь";
	break;
	case 2:$a="Февраль";
	break;
	case 3:$a="Март";
	break;
	case 4:$a="Апрель";
	break;
	case 5:$a="Май";
	break;
	case 6:$a="Июнь";
	break;
	case 7:$a="Июль";
	break;
	case 8:$a="Август";
	break;
	case 9:$a="Сентябрь";
	break;
	case 10:$a="Октябрь";
	break;
	case 11:$a="Ноябрь";
	break;
	case 12:$a="Декабрь";
	break;
	default: $a=null;
	endswitch;
	return $a;
}
$result = number_month ($a);
echo $result;
