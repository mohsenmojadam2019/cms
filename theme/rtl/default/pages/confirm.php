<?php

	if( isset( $_GET['i'] ) && is_numeric( $_GET['i'] ) && isset( $_GET['h'] ) ){
		
		$valid = $pageData->confirm($_GET['i'],$_GET['h']);
		
		if( $valid ) echo '<div class="alert alert-success">
		  <strong>تبریک!</strong> نام کاربری شما با موفقیت فعال شد.
		</div>';
		else echo '<div class="alert alert-danger">
		  <strong>اخطار!</strong> مقادیر ارسالی اشتباه است.
		</div>';
		
	}else{
		
		echo '<div class="alert alert-danger">
		  <strong>اخطار!</strong> مقادیر ارسالی اشتباه است.
		</div>';
		
	}

?>