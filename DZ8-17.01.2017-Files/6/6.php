<?php

$file=$_POST['userdir'];

function directory_view ($dirname){
	if ($handle=opendir($dirname)){
		while(false!==($entry=readdir($handle))){
		if($entry!='.'&& $entry!='..' ){
			$extension=pathinfo($entry,PATHINFO_EXTENSION);
			if(empty($extension)){?>
					<img width=20px src='icons/folder.jpg'></img>
			<?php
			}
			else{?>
				<img width=20px src='icons/<?=$extension.".jpg";?>'></img>
				<?php
			}			
						
			echo $entry;echo "<br>";
			echo "Дата модификации -".(date('Y-m-d', filemtime($dirname."/".$entry)));	echo "<br>";
			echo "Размер файла в байтах -".(filesize($dirname."/".$entry)); echo "<br>";
			echo "<br>";
				if(is_dir($dirname.'/'.$entry)){
					?>
			<img width=20px src='icons/folder.jpg'></img>
			<?php
				echo "Папка ". $dirname."/".$entry; echo "<br>";
				echo "Дата модификации -".(date('Y-m-d', filemtime($dirname."/".$entry)));	
				echo "<br>";
					directory_view($dirname.'/'.$entry);
				}
		}
		}
	}
}
			
	

directory_view($file);
?>
