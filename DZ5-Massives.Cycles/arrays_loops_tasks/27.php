<?php
$row=1;
$cols=1;
$item=1;
$colors=array ('red','yellow','blue','gray','maroon','brown','green');

echo "<table border=1>";
for ($row=1; $row<=5; $row++){
	
	echo "<tr>";
	for ($cols=1; $cols<=5; $cols++){
		$item=rand();//генерируем случайные числа
		$random_color=$colors[rand (0,6)]; //выбираем из массива цветов случайный цвет от 0 до 6
		echo  "<td bgcolor=$random_color>"; //задаем ячейке (столбцу) этот случайный цвет
			echo $item;	
		echo "</td>";
	}
	
	echo "</tr>";
}
echo "</table>";