<?php

	$is_login = $pageData->is_login();
	
	if( !$is_login ){
		include( $template_url.'pages/login.php' );
		die();
	}

?>
	
	<section class="main-contents">
	
		<div class="row">
		
			<div class="col-xs-12 col-md-3 pull-right">
				
				
				<?php
				
					$cats = $pageData->build_cats();
					echo $cats;
				
				?>
				
			</div>
		
			<div class="col-xs-12 col-md-9 pull-right">
			
				
				
					
			
			</div>
			
		</div>
	
	</section>