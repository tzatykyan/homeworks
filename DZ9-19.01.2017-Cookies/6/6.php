<?php
//проверяем, авторизирован ли пользователь
if($_POST){
$username=($_POST['user_name'])? $_POST['user_name']:null;
$password=($_POST['user_password'])? $_POST['user_password']:null;
$email=($_POST['user_email'])? $_POST['user_email']:null;
}
else{
	header("Location:http://localhost/homeworks/DZ9-19.01.2017-Cookies/6/login.php");
}

$user_db=[
'user1'=>[
	'login'=>'akaray',
	'password'=>'1234',
	'email'=>'akaray@gmail.com'],
'user2'=>[
	'login'=>'admin',
	'password'=>'admin',
	'email'=>'email.com']
];

$authorize=false;

foreach ($user_db as $user_array){
		if ($username==$user_array['login'] && $password==$user_array['password']&& $email==$user_array['email'])
		{
			setcookie('authorize', "true", time()+60*60*24); //ставим куку, что авторизован
			$authorize=true;
		}
		}

//print_r($_COOKIE);


if (($_COOKIE['authorize']=='true')||$authorize=='true'){
	
?>

<ul>
<li>Desert.jpg <a href="download.php?file=Desert.jpg">скачать</a></li>
<li>Chrysanthemum.jpg <a href="download.php?file=Chrysanthemum.jpg">скачать</a></li>
<li>Hydrangeas.jpg <a href="download.php?file=Hydrangeas.jpg">скачать</a></li>
<li>Jellyfish.jpg <a href="download.php?file=Jellyfish.jpg">скачать</a></li>
<li>Koala.jpg <a href="download.php?file=Koala.jpg">скачать</a></li>

</ul>
<form method="post" action="signout.php">
<input type="submit" value="sign out">
<?php
}

else{
	echo "Вернитесь на главную и еще раз введите данные!";?>
	<a href='/homeworks/DZ9-19.01.2017-Cookies/6/login.php'>Вернуться</a>
	<?php
}

?>
