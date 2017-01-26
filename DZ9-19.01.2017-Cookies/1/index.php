<?php
/*Сделайте две страницы: index.php и hello.php. При заходе на index.php спросите с помощью формы имя пользователя, запишите его в сессию. При заходе на hello.php поприветствуйте пользователя фразой "Привет, %Имя%!".*/

require_once('session.php');
?>
<form method='post'action='1.php'>
Как вас зовут? <input type='text' name='username'>
<input type='submit'>
</form>
