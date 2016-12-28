<?php
/*from wikipedia: 
Every year that is exactly divisible by four is a leap year, except for years that are exactly divisible by 100, but these centurial years are leap years if they are exactly divisible by 400. For example, the years 1700, 1800, and 1900 are not leap years, but the years 1600 and 2000 are.
*/

$year = 1900;

function find_year($y){
	if (($y%4==0 && $y%100!=0) || ($y%400==0 && $y%100==0))
	
	{
		
		return "Это высокосный год";
	}
	else{
		return "Это не высокосный год, ура!";
	}
}

$result=find_year($year);
echo $result;