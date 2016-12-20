<?php
$max=0;
$min=100;
for ($i=0; $i<=20; $i++){
	$item = rand (0,100);
	$array[] = $item;
}
echo "<pre>";
print_r($array);
echo "</pre>";

	foreach ($array as $elem){
		if ($elem>=$max){
			$max=$elem;
		}
		elseif ($elem<=$min){
			$min=$elem;
		}
	}
	echo "max is $max";
	echo "<br>";
	echo "min is $min";
	$key_max=array_search($max, $array); //возвращает ключ элемента $max
	echo "<br>";
	echo $key_max;
	echo "<br>";
	$key_min=array_search ($min, $array);
	echo $key_min;
	
	$array[$key_max]=$min; //присвоить максимальном элементу миним. значение
	$array [$key_min]=$max; //присвоить минимальному элементу максим значение
	
	echo "<pre>";
print_r($array);
echo "</pre>";
	