<?php
$a = false;
$b = true;
$c = null;

// we get:  bool(true) bool(false) NULL NULL + notice
var_dump($a, $b, $c, $some_undefined_var);

echo '<br>';

$a = false;
$b = true;
$c = null;

$arr = array($a, $b, $c, 'some_array' => array(1, 2, "Something written here"));

echo '<pre>';
var_dump($arr);
echo '</pre>';