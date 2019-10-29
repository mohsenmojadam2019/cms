
	
	<section class="main-contents">
	
		<div class="row">
		
			<div class="col-xs-12 col-md-3 pull-right">
				
				
				<?php
				
					$cats = $pageData->build_cats();
					echo $cats;
				
				?>
				
			</div>
		
			<div class="col-xs-12 col-md-9 pull-right">
			
				
					
				<form action="./?m=register" method="post" class="forms" id="register-form">
				
					<input type="hidden" name="action" value="register" />
				
					<fieldset>
						<legend>ثبت نام</legend>
						
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
								<label>نام:</label>
								<input type="text" name="name" class="required" data-min="3" />
								<span></span>
							</li>
							<li>
								<label>نام خانوادگی:</label>
								<input type="text" name="family" class="required" data-min="3" />
								<span></span>
							</li>
							<li>
								<label>شماره همراه:</label>
								<input type="text" name="cell" class="required numeric" data-min="11" data-max="11" />
								<span></span>
							</li>
							<li>
								<label>آدرس:</label>
								<input type="text" name="address" class="required" />
								<span></span>
							</li>
							<li>
								<label></label>
								<input type="button" value="ثبت نام" />
								<span></span>
							</li>
						</ul>
						
					</fieldset>
				
				</form>
					
					
			
			</div>
			
		</div>
	
	</section>