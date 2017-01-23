<?php
$counter='counter.txt';

$visits=file($counter);

$current_visitors=$visits['0'];
$current_visitors++;

$resource=fopen($counter, 'w+');
fwrite($resource, $current_visitors);
fclose($resource);