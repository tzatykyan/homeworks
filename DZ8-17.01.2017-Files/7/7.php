<?php
//print_r($_FILES);
$upload_dir='server/uploads/';

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_dir.$_FILES['userfile']['name'])){
	echo "Ваш файл загружен<br>";
}
else{
	echo"произошла ошибка";
}

$user_file=file($upload_dir.$_FILES['userfile']['name']);
$server_file=file('server/uploads/server_links.txt');
$prohibited_file=file('server/uploads/prohibited_links.txt');

foreach($user_file as $user_link){
	if (!in_array($user_link,$prohibited_file) ){
			$user_file_wo_prohibited[]=$user_link;
		}
	}
foreach($user_file_wo_prohibited as $link){
	echo $link;
	if(!in_array($link, $server_file)){
		$server_file[count($server_file)]=$link;
	}
}
	

echo "<pre>";
//print_r($user_file);
print_r($server_file);
//print_r($prohibited_file);
//print_r($user_file_wo_prohibited);

echo "</pre>";

$resource=fopen('server/uploads/server_links.txt', 'w');
foreach ($server_file as $link){
fwrite($resource, $link.PHP_EOL);
}