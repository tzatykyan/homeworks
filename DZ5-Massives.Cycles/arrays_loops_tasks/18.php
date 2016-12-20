<?php
$array=array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri","Sat");

foreach ($array as $day){
	
	if ($day=="Sat" || $day=="Sun" ){
		
		echo "<strong>$day</strong>";
			}
	else{
		echo $day;
	}
	echo "<br>";
}
