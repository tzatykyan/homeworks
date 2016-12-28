<?php
$a= array(0,1,2,3,4,5,6,7,8);

function even_massive(array $array){
	foreach ($array as $key=>$value){
		if ($key%2==0){ //находим элементы массива с четными индексами и создаем из них новый массив
			$even_array[]=$value;
		}
	}
	foreach ($even_array as $value){ //пробегаемся по массиву, чтобы отобразить его элементы
				echo $value;
				echo "<br>";
	}
}

$result=even_massive($a);
print_r ($result);
