<?php
$default_dir="/homeworks";
function traverse_dir($dir){
	chdir($dir);
	if(! ($dp=opendir($dir))) die;
	while($file=readdir($dp)){
		if(is_dir($file)){
			if($file !="." && $file !=".."){
				echo"/$file<br>";
				traverse_dir("$dir/$file");
				chdir($dir);
			}
		}
		else echo "$file<br>";
		
	}
	
}
traverse_dir($default_dir);