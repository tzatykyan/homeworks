<?php
/*
5) Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.*/

session_start();

if (!isset($_SESSION['timestart'])){
$time=date_create(date('H:i:s'));
$_SESSION['timestart']=$time;
}
print_r($_SESSION['timestart']);
echo "<br>";

$current_time=date_create(date('H:i:s'));

print_r($current_time);
$duration=date_diff($current_time,$_SESSION['timestart']);
echo "<br> Вы на сайте уже: <br>";
print_r ($duration);