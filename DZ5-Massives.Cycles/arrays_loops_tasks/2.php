<?php
$array=array (1, 20, 15, 17, 24, 35);

$result =$array[0];
 
foreach ($array as $item){
	
	$result+=$item;
	echo "<br>";
	echo $result;
}