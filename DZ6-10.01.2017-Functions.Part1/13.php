<?php

$year=1948; $year2=2016;
$month=5; $month2=7;
$day=23; $day2=5;
$hour=6; $hour2=8;
$minute=46; $minute2=32;
$second=37; $second2=18;
//записываем вводимые даты в массивы. проверяем корректность вводимых значений
//ввод года
function form_date($year, $month, $day, $hour, $minute, $second, $year2, $month2, $day2, $hour2, $minute2, $second2){
if ($year>1000 && $year<3000){
	$result_date["y"]= abs($year2-$year);
}
else {
	echo "Введите год от 1000 доо 3000";
}
//ввод месяца
if ($month>=1 && $month<=12){
	$result_date["m"]=abs($month2-$month);
}
else{
	echo "Введите месяц от 1 до 12";
}
//ввод дня. проверка на февраль
if ($month==2&& $day>=1 && $day<=29){
	$result_date["d"]=$day2-$day;
}
//ввод дня. месяцы с 30 днями
elseif (($month==4 || $month==6 || $month==9 || $month==11) && $day>=1 && $day<=30){
	$result_date["d"]=abs($day2-$day);
}
//ввод дня. месяцы с 31 днем
elseif (($month==1 || $month==3 || $month==5 || $month==7 ||$month==8 || $month==10 || $month==12) && $day>=1 && $day<=31){
	$result_date["d"]=abs($day2-$day);
}
else{
	echo "Проверьте правильность ввода даты";
}
//ввод часа
if ($hour>=1 && $hour <=24){
	$result_date["h"]=abs($hour2-$hour);
}
else {
	echo "Введите кол-во часов от 1 до 24";
	}
//ввод минут
if ($minute>=0 && $minute <=59){
	$result_date["i"]=abs($minute2-$minute);
}
else {
	echo "Введите кол-во минут от 0 до 59";
	}
//ввод секунд
if ($second>=0 && $second <=59){
	$result_date["s"]=abs($second2-$second);
}
else {
	echo "Введите кол-во секунд 0 до 59";
	}
return $result_date;

} 

$result=form_date($year, $month, $day, $hour, $minute, $second, $year2, $month2, $day2, $hour2, $minute2, $second2);
echo "<pre>";
print_r ($result);
echo "</pre>";
