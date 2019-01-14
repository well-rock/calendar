<?php 
include_once 'class.db_connect.inc.php';

Class Calendar extends DB_Connect{
	// A data que o calendário deve ser criado
	private $_useDate;

	// O mês que o calendário deve ser criado
	private $_m;

	// O ano que o calendário deve ser criado
	private $_y;

	// O número de dias no mês usado
	private $_daysInMonth;

	// O índice dos dias da semana (0-6)
	private $_startDay;

	public function __construct($dbo=NULL, $useDate=NULL){
		parent::__construct($dbo);
	}
}

 ?>