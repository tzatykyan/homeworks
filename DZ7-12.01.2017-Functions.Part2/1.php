<?php
/*���������� �������� �������� ������ � ������� � � ������������� ����. ����������� ����������� ������ � ��/�, �/c.
�������� ������: ���������� ���� - S; ����� �������� - t.
����������� ������� ������ � ������� ����� �������.*/

$S=500;
$t=5;
function car_speed($S, $t){
	return $v=round($S/$t, 1). ' km/h or '. round($S*1000/$t/3600). "m/s";
}

$speed = car_speed($S, $t);
echo $speed;