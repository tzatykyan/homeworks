<?php
/*)Пользователь загружает текстовый файл со списком ссылок. Добавить в базу (файл на сервере) из этого файла только те ссылки, которых нет ни в базе, ни в файле с запрещенными ссылками.*/

//print_r($_FILES);
$upload_dir='server/uploads/';

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_dir.$_FILES['userfile']['name'])){
	echo "Ваш файл загружен<br>";
}
else{
	echo"произошла ошибка";
}

$user_file=file($upload_dir.$_FILES['userfile']['name']);
$server_file=array_unique(file('server/uploads/server_links.txt'));
$prohibited_file=file('server/uploads/prohibited_links.txt');

$unique_user_links=array_unique(array_diff($user_file,$server_file,$prohibited_file));
echo "<pre>";

print_r($user_file);
print_r ($server_file);
print_r($prohibited_file);
print_r($unique_user_links);

echo "</pre>";

foreach ($unique_user_links as $link){
file_put_contents('server/uploads/server_links.txt', PHP_EOL.$link, FILE_APPEND);
}