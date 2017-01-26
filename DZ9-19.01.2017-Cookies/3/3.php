<?php

//print_r($_POST);
if($_POST){
$username=($_POST['user_name'])? $_POST['user_name']:null;
$password=($_POST['user_password'])? $_POST['user_password']:null;
$email=($_POST['user_email'])? $_POST['user_email']:null;
}
else{
	die;
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
			
			setcookie('authorize', "true", time()+60*60*24);
			$authorize=true;
			echo "Logged in! Hi, {$user_array['login']}";
			
		}

		}


//print_r($_COOKIE);

if (array_key_exists('authorize', $_COOKIE) || $authorize==true){
?>

<form method="post" action="signout.php">
<input type="submit" value="sign out">
<?php
unset ($_COOKIE['authorize']);
}
?>
