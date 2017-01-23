<?php

require_once('session.php');

$count=isset($_SESSION['count_page2'])? $_SESSION['count_page2']:0;
$count++;
setValueToSession('count_page2', $count);

?>

Вторая страница