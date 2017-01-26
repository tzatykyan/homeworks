<?php

if($_POST){
	if($_POST['phone']){
		setcookie('phone', $_POST['phone']);
		
	}
	if(array_key_exists('phone', $_COOKIE)){
	$phone=$_COOKIE['phone'];
}
else {
	$phone=($_POST['phone']);

}
}


?>
<html>
<head>
<body>

<form method='post' action='success.php'>

<p>Ваш телефон?<input required name="phone" value="<?= $phone;?>"> </p>
<p>Ваше имя?<input name="name"></p>
<p>Ваша фамилия? <input name="surname"></p>
<p><input type='submit'>
</body>
</head>
</html>
