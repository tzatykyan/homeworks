<?php
$a=1;
$b=2;
$c=0;
$operator='+';

if ($b==0 && $operator=='/' || $operator=='%'){
	echo 'на ноль делить нельзя';
}
else{
switch ($operator){
	case '+': $c=$a+$b;
		break;
	case '-': $c=$a-$b;
		break;
	case '*': $c=$a*$b;
		break;
	case '/': $c=$a/$b;
		break;
	case '%': $c=$a%$b;
		break;
}
}
echo $c;