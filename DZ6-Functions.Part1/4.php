<?php

$mas = array(1,2,3,4,5,6,7,0,8);
function count_analog($array){
	$i=0;
	foreach($array as $item){
		$i++;
	}
	return $i;
}
$result=count_analog($mas);
echo $result;
