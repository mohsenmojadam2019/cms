
	
	<section class="main-contents">
	
		<div class="row">
		
			<div class="col-xs-12 col-md-3 pull-right">
				
				
				<?php
				
					$cats = $pageData->build_cats();
					echo $cats;
				
				?>
				
			</div>
		
			<div class="col-xs-12 col-md-9 pull-right">
			
			<?php
			
				if( $check_forms === true ){
					
					echo '<script>
						window.location = "./?m=panel";
					</script>';
					
				}else{
					
					if( $check_forms === false ) echo '<div class="alert alert-danger">
					  <strong>اخطار!</strong> مقادیر ارسالی اشتباه است.
					</div>';
			
			?>
					
				<form action="./?m=login" method="post" class="forms" id="login-form">
				
					<input type="hidden" name="action" value="login" />
				
					<fieldset>
						<legend>ورود به حساب کاربری</legend>
						
						<ul>
							<li>
								<label>ایمیل:</label>
								<input type="text" name="mail" class="required email" />
								<span></span>
							</li>
							<li>
								<label>رمز عبور:</label>
								<input type="password" name="pass" class="required" data-min="8" />
								<span></span>
							</li>
							<li>
								<label></label>
								<input type="button" value="ورود" />
								<span></span>
							</li>
						</ul>
						
					</fieldset>
				
				</form>
					
					
			<?php
			
				}
			
			?>
					
			
			</div>
			
		</div>
	
	</section>