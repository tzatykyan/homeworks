<?php
if(!array_key_exists('authorize', $_COOKIE)){ //если пользователь не авторизован, редиректим его на авторизацию
	header('Location: http://localhost/homeworks/DZ9-19.01.2017-Cookies/6/login.php');
}

print_r($_GET);
$file="download/".$_GET['file'];

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}

