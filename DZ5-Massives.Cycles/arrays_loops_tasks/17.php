<?php
$array=array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");

foreach ($array as $months){
	$y=date("M");
	if ($months==$y){
		$month=$months;
		echo "<strong>$month</strong>";
		
	}
	else{
		echo $months;
	}
	echo "<br>";
}
