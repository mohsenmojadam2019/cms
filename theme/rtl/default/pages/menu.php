<nav class="navbar navbar-inverse"> 
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav main-menu-ul">
							<ul class="nav navbar-nav navbar-left">
								<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							</ul>
							<?php
//	 متغیر را برابر pagedata  میکنیم تا بتونیم از کلاسش استفاده کنیم و به تابع get menu  دسترسی داشته باشیم
								$menu = $pageData->get_menu();
//	برای اینکه هر بار یکی از منوها اکتیو شود متغیری با مقدار صفر می گذاریم
								$menu_count = 0;
								// دفعه اول رکورد اول را می خواند   میگه صفحه اصلیه   
								foreach( $menu as $child_menu ){
								// وقتی صفحه اصلیه یه بار منو را می خواند  که زیرمجموعه صفحه اصلین  میریزه در متغیر
									$childs = $pageData->get_menu( $child_menu['id'] );
								
									echo '<li'.( count($childs) ? ' class="dropdown"' : '' ).'>
		
<a'.( count($childs) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '' ).' href="'.$child_menu['href'].'">'.$child_menu['title'];
//در قسمت بالاااگر بچه داشت   کلاس دراپ تاگل  در غیر اینصورت  هیچکاری نکن
										// اگرمتغیر فرزند داشت کلاس کارت بوت استرپ چاپ کن
										if( count($childs) ) echo '<span class="caret"></span>';

									echo '</a>';
									// اگر متغیر فرزند داشت کلاس دراپ منو بوت استرپ چاپ کن
										if( count($childs) ){

											echo '<ul class="dropdown-menu">';
											// به ازای فرزندانی که داشت     
												foreach( $childs as $child_childs ){
//	چاپ کن فیلد های title , href
													echo '<li><a href="'.$child_childs['href'].'">'.$child_childs['title'].'</a></li>';
													
												}
													
											echo '</ul>';
											
										}
									
									echo '</li>';
//	هر بار یکی اکتیو شود
									$menu_count++;
									
								}
							
							?>
						</ul>
					</div>
				</div>
			</nav>