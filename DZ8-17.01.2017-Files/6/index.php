<form method='post' action='6.php'>
Введите имя директории<input name='userdir'></input>
<input type='submit'>
<?php
/*6)Пользователю предлагается ввести имя каталога в локальной файловой системе сервера. Сценарий PHP выводит содержимое этого каталога в следующем формате: пиктограмма, указывающая на тип файла, имя файла, размер (или специальная пометка, если файл является каталогом), дата и время последней модификации.*/
echo "<br>";
echo "Доступны следующие файлы:";
if($handle=opendir('.')){
	while(false!==($entry=readdir($handle))){
	echo $entry;
	echo "<br>";
}
}

?>