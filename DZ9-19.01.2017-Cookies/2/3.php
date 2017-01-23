<?php

require_once('session.php');

$count=isset($_SESSION['count_page3'])? $_SESSION['count_page3']:0;

$count++;

setValueToSession('count_page3', $count);
?>

Третья страница