<?php

include_once("Medoo.php");

use Medoo\Medoo;

class Cms {
	
	protected $db = null;
	protected $language;
	
	public function __construct($l=1){
		$this->language = $l;
		@session_start();
		//if (!isset($_SESSION['BASKETSESSID']))
		//	$this->makeNewBasketSession();
	}
	
	public function _connectDB(){
		$this->db = new Medoo([
			'database_type'	=> DB_TYPE,
			'prefix'		=> DB_PREFIX,
			'database_name'	=> DB_NAME,
			'server'		=> DB_HOST,
			'username'		=> DB_USER,
			'password'		=> DB_PASS,
			'charset'		=> 'utf8'
		]);
		
		return $this->db->query("SET NAMES utf8");
	}
	
}

?>