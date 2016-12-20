<?php
$result=1;

for ($i=0; $i<=10; $i++){
	$elem=rand(1,100);
	$array[]=$elem;
}
foreach ($array as $key=>$value){
		if ($key%2==0 && $value>0){
			$result*=$value;
		}
	}
echo $result;
echo "<br>";
	
foreach ($array as $key=>$value){
	if ($key%2!=0 && $value>0){
		echo "odd value - $value";
		echo "<br>";
	}
}

echo "<pre>";
print_r($array);
echo "</pre>";

