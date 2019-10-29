<?php

//error_reporting(0);

header("Content-Type: text/html; charset=UTF-8");

session_start();



include('./config.php');
include('./inc/pagedata.class.php');
$pageData = new PageData();

	$logout = $pageData->logout();
	$logout = $pageData->logout();
	if( $logout ) echo 'خروج موفقیت آمیز!';
	else echo 'خطا! دوباره تلاش کنید!';
?>