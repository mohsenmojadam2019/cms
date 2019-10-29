<?php
//error_reporting(0);

header("Content-Type: text/html; charset=UTF-8");

session_start();



include('./config.php');
include('./inc/pagedata.class.php');
$pageData = new PageData();

if( isset( $_POST['count'] ) && isset( $_POST['product_id'] ) && isset( $_POST['action'] ) && $_POST['action'] == 'add-to-basket' ){
	
	$result = $pageData->add_to_basket($_POST['count'],$_POST['product_id']);
	echo $result;
	
}

if( isset( $_POST['action'] ) && $_POST['action'] == 'get-basket' ){
	
	$basket = $pageData->get_basket();
	
	foreach( $basket as $record ){
		
		$product = $pageData->get_product( $record['product_id'] );
		$product = $product[0];
		
		echo '<li><a href="javascript: void(0);" class="delete" data-product="'.$record['id'].'">X</a> '.$product['title'].' ('.$record['product_count'].')</li>';
		
	}
	
}

if( isset( $_POST['action'] ) && $_POST['action'] == 'delete' && isset($_POST['record_id'] )){
		
	$del_basket = $pageData->delete_basket($_POST['record_id']);	
		
}

?>