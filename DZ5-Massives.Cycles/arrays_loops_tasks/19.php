<?php
$array=array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri","Sat");

foreach ($array as $days){
	
	if ($days=="Sat"){
		$day=$days;
		echo "<i>$day</i>";
			}
	else{
		echo $days;
	}
	echo "<br>";
}
