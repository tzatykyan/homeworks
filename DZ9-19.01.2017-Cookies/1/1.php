<?php
require_once('session.php');

//setValueToSession('username',$_POST['username']);
//print_r($_POST);

echo "Спасибо, мы вас запомнили";

setValueToSession('username',$_POST['username']);
//print_r($_SESSION);
?>