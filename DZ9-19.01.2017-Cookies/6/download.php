<?php
if(!array_key_exists('authorize', $_COOKIE)){ //если пользователь не авторизован, редиректим его на авторизацию
	header('Location: http://localhost/homeworks/DZ9-19.01.2017-Cookies/6/login.php');
}

//print_r($_GET);
$file="download/".$_GET['file'];
//print_r($file);
$filename=basename($file);


$stats = [
  ['filename' => 'Chrysanthemum.jpg',
     'downloadCount' => 0],
  ['filename' => 'Desert.jpg',
     'downloadCount' => 0],
  ['filename' => 'Hydrangeas.jpg',
     'downloadCount' => 0],
  ['filename' => 'Jellyfish.jpg',
     'downloadCount' => 0],
  ['filename' => 'Koala.jpg',
     'downloadCount' => 0]
];

if(file_exists('statistics.php')){
$statistics=file_get_contents('statistics.php');

if(empty($statistics)){
	
	foreach ($stats as &$file_stat){
			if($file_stat['filename']==$filename){
				$file_stat['downloadCount']++;
				}
				
		}
		$serialize_stat=serialize($stats);
		file_put_contents('statistics.php', $serialize_stat);
		unset ($file_stat);
		}
	else{
		$deserialize_stat=unserialize($statistics);
		foreach ($deserialize_stat as &$file_stat){
			if($file_stat['filename']==$filename){
			$file_stat['downloadCount']++;
				}
				
		}
		$serialize_stat=serialize($deserialize_stat);
		file_put_contents('statistics.php', $serialize_stat);
		unset ($file_stat);
		
	}
}
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: image/jpeg');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}

