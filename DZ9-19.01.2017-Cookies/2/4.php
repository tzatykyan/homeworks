<?php
require_once('session.php');

$count1=getValueFromSession('count_page1');
$count2=getValueFromSession('count_page2');
$count3=getValueFromSession('count_page3');

echo "Вы посещали такие страницы:";
if($count1>0){
	echo "Страницу №1 ";
} 
if($count2>0){
	echo "Страницу №2 ";
} 
if($count3>0){
	echo "Страницу №3  ";
} 

?>
<html>

<div>
Подробно о посещениях: <br>

Страница 1 - <?= $count1;?> раз <br>
Страница 2 - <?= $count2;?> раз <br>
Страница 3 - <?= $count3;?> раз <br>
</div>

</html>