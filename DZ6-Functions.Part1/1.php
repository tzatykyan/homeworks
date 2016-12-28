<?php
$array=array("a", "b", "c", "d", "e");

$array1=array_map("mb_strtoupper", $array);

print_r ($array1);
