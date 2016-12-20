<?php
$array=array(7, 7, 5, 19, 13, 0, 10);
$count=0;

foreach ($array as $e){
	//echo $e."<br>";
	if ($e==2 || $e==3 || $e==4){
		$count++;	
	}
}
if ($count!==0){
	echo "Есть!";
}
else{
	echo "Нету!";
}
