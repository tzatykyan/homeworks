<table border=1>
<?php
$x=1;
$y=1;
for ($x=1; $x<=10; $x++){
	echo "<tr>";
	for ($y=1; $y<=10; $y++){
		echo "<td>";
			echo $x*$y;
		echo "</td>";
	}
	echo "</tr>";
	}
	
	