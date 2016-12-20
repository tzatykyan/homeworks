<?php
$array=array (1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($array as $item){
	if ($item==3 ||$item==6){
		echo $item;
	}
	else{
		echo $item."<br>";
	}
}