<?php
/*�������� �������, ������� ������� ����� ���������� �������������� ������������

c**2=a**2+ b**2*/


function gipotenusa ($a, $b){
	
	$c=round(sqrt($a**2+$b**2),2);
	return $c;
}

$result=gipotenusa(16,8);
echo $result;