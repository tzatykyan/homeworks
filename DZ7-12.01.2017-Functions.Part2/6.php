<?php
/*Напишите функцию, которая будет находить корни квадратного уравнения.
Корни уравнения ax2 + bx + c = 0 (a ? 0) находят по формуле*/

function square_expression($a, $b,$c){
	$values=[];
	$d=($b**2)-(4*$a*$c);
	if ($d>=0){
		$x1=round((-$b+sqrt($d))/(2*$a),2);
		$x2=round((-$b-sqrt($d))/(2*$a),2);
		array_push($values, $x1);
		array_push($values,$x2);
		return $values;
	}
	else {
		echo "Так как дискриминант меньше нуля, то уравнение не имеет действительных решений.";
	}
	

}

$values=square_expression(9,76,5);
print_r($values);

