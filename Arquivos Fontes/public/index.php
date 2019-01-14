<?php 

// Inclui os árquivos necessários
include_once '../sys/core/init.inc.php';
include_once '../sys/class/class.calendar.inc.php';

// Carrega o Calendário de Janeiro
$cal = new Calendar($dbo, "2018-01-01 12:00:00");

if (is_object($cal)) {
	echo "<pre>",
	var_dump($cal),
	"</pre>";
}

 ?>