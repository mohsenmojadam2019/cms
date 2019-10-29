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

include('./config.php');
include('./inc/pagedata.class.php');

$template_url = './theme/'.DIRECTION.'/'.THEME.'/';

$pageData = new PageData();

$check_forms = $pageData->search_forms();
//var_dump($check_forms);

include($template_url.'template.php');


?>