<?php
$array=array(26, 17, 136, 12, 79, 15);
$result=0;
foreach ($array as $item){
	$item=$item**2;
	$result+=$item;
	echo "item - $item";
	echo "<br>";
	echo "result - $result";
	echo "<br>";
}