<?php
include_once("Medoo.php");
//استفاده از کلاس medoo اجباری است
use Medoo\Medoo;

class Cms {
	// تعریف متغیر db که بعد بوسیله آن medoo را وصل کنیم
	protected $db = null;
	protected $language;
	// زبان را برابر متغیر میکنیم تا دیگر با متغیر کار کنیم
	public function __construct($l=1){
		$this->language = $l;
		// از ادساین برای رفع ارور
		@session_start();
		// اگر قبلا کاربر خرید نکرده بود پروژه جدید بساز براش
		//if (!isset($_SESSION['BASKETSESSID']))
		//	$this->makeNewBasketSession();
	}
	// تابع اتصال به دیتابیس 
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
		// فارسی ساپورت شود
		return $this->db->query("SET NAMES utf8");
	}
	
}

?>