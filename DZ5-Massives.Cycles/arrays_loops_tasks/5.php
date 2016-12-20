<?php
$arr=array("Коля"=>200, "Вася"=>300, "Петя"=>400);
foreach ($arr as $key=>$value){
	if ($key=="Коля"){
		echo "Коля - зарплата $value долларов";
	}
}
