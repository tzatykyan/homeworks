<?php

require_once('session.php');

$count=isset($_SESSION['count_page1'])?(int)$_SESSION['count_page1']:0;
$count++;

setValueToSession('count_page1',$count );

?>
Первая страница
