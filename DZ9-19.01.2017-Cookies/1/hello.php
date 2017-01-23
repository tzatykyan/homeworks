<?php

require_once('session.php');


$username=getValueFromSession('username');

echo "Привет, $username! А я тебя тут жду!";