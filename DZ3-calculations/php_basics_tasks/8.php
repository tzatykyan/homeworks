<?php
$age="возрастЙЫЧ";
if ($age<0 || !is_numeric($age )){
echo "Неизвестный формат";}

elseif ($age>=18 && $age<=59)
{
	echo "Вам еще работать и работать";
}
elseif ($age>59){
	echo "Вам пора на пенсию";
}
elseif ($age>=0 && $age<=17){
	echo "Вам еще рано работать";
}
