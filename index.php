 <?php
//error_reporting(0);

header("Content-Type: text/html; charset=UTF-8");

session_start();

	/*============[security section]================*/
	$currentcookieparams = session_get_cookie_params();
	$sidvalue = session_id();
	setcookie(
		'PHPSESSID',					//name
		$sidvalue,						//value
		0,								//expire at the end of session
		$currentcookieparams['path'],	//path
		$currentcookieparams['domain'],	//domain
		false,							//secure
		true							//http only
	);
	/*============[/security section]================*/
// آدرس قالب
include('./config.php');
include('./inc/pagedata.class.php');
// آدرس قالب را ردون متغیر می گداریم
$template_url = './theme/'.DIRECTION.'/'.THEME.'/';
// نوه pagedata.class.php
// در اینجا نمونه ای از کلاس page data  می سازیم تا بتوانیم از آن کلاس استفاده کنیم
$pageData = new PageData();
// ابجکتی میسازیم تا بتوانیم بوسیله آن عملیات سرچ انجام بدهیم
$check_forms = $pageData->search_forms();

include($template_url.'template.php');


?>