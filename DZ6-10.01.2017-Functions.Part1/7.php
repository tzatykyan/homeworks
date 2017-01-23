<?php
$a=date("n"); // передаем текущий месяц в виде чисел от 1 до 12
function month ($a){ //находим ему русское соответствие
	switch ($a):
	case 1: $a="января";
	break;
	case 2:$a="февраля";
	break;
	case 3:$a="марта";
	break;
	case 4:$a="апреля";
	break;
	case 5:$a="мая";
	break;
	case 6:$a="июня";
	break;
	case 7:$a="июля";
	break;
	case 8:$a="августа";
	break;
	case 9:$a="сентября";
	break;
	case 10:$a="октября";
	break;
	case 11:$a="ноября";
	break;
	case 12:$a="декабря";
	break;
	default: $a=null;
	endswitch;
	return $a;
}
$b=date("N"); //передаем текущий день недели

function day_week ($b){ //находим ему соответствие
switch ($b):
	case 1: $b="понедельник";
	break;
	case 2:$b="вторник";
	break;
	case 3:$b="среда";
	break;
	case 4:$b="четверг";
	break;
	case 5:$b="пятница";
	break;
	case 6:$b="суббота";
	break;
	case 7:$b="воскресенье";
	break;
	default: $b=null;
	endswitch;
	return $b;
}
$month = month($a); // передаем в переменную месяц
$weekday= day_week ($b); //передаем в переменную день недели
$day= date("j"); // используем встроенную функцию даты и передаем в переменную день месяца
$date="$day $month, $weekday"; //выводим дату в нужном формате.

echo $date;
