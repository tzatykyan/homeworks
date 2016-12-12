<?php
$a=1;
$b=0;
$c=0;
$operator='/';

if ($operator=="+"){
	$c=$a+$b;
}
elseif ($operator=='-'){
	$c=$a-$b;
	}
elseif ($operator=='*'){
	$c=$a*$b;
}
elseif ($b==0 && $operator=='/'){
	echo 'на ноль делить нельзя';
}
elseif ($b==!0 && $operator=='/'){
	$c=$a/$b;
}
elseif ($b==0 && $operator=='%'){
	$c=$a%$b;
}
elseif ($b!==0 && $operator=='%'){
	$c=$a%$b;
}

echo $c;