<?php
/*Написать функцию, которая будет показывать список всех файлов в данной папке (поиск файлов происходит и во всех вложенных уровнях).*/


$dir='.';

function directory_read($dir){
  
if ($handle = opendir($dir)) {
   
    while (false !== ($entry = readdir($handle))) {
        echo "$entry";
		echo "<br>";
    
	if(is_dir($dir.'/'.$entry)){
		if($entry!='.' &&$entry!=".."){
			
			directory_read($dir.'/'.$entry);
			
			}
			else {
		
			}
			
	}


	}
    closedir($handle);
}
}
directory_read($dir);