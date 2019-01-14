<?php 

// Inclui as informações de configuração necessárias
include_once '../sys/config/db-cred.inc.php';

// Defina as constantes para as informações de configuração
foreach ($C as $name => $val) {
	define($name, $val);
}

// Cria um objeto PDO
$dsn = "mysql:host=" . DB_HOST . ";dbname=" .DB_NAME;
$dbo = new PDO($dsn, DB_USER, DB_PASS);


// Carga automática das Classes
function autoload ($teste){
	$filename = "../sys/class/class." .$teste . ".inc.php";
	if(file_exists($filename)){
		include_once $filename;
	}

spl_autoload_register("autoload");
}

 ?>