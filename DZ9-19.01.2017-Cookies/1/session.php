<?php

session_start();

function setValueToSession($key, $value){
	$_SESSION[$key]=$value;
	return $value;
}

function getValueFromSession($key){
	if(array_key_exists($key, $_SESSION)){
		return $_SESSION[$key];
	}
	return null;
}