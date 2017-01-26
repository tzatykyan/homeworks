<?php

$statistics=unserialize(file_get_contents('statistics.php'));

echo "<pre>";
print_r($statistics);
echo "</pre>";