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
							<?php
							
								$is_login = $pageData->is_login();
								if( !$is_login ){
									
							?>
								<li><a href="./?m=register"><span class="glyphicon glyphicon-user"></span> ثبت نام</a></li>
								<li><a href="./?m=login"><span class="glyphicon glyphicon-log-in"></span> ورود</a></li>
							<?php
							
								}else{
							
							?>
								
								<li><a href="./?m=panel">سلام <?php echo $_SESSION['NET_COLLEGE_USER']; ?></a></li>
								<li class="dropdown">
									<a href="javascript: void(0);" data-toggle="dropdown" class="dropdown-toggle">سبد خرید <span class="caret"></span></a>
									<ul class="dropdown-menu" id="mini-basket">
										
									</ul>
								</li>
								<li><a href="./?m=logout"><span class="glyphicon glyphicon-log-out"></span>خروج</a></li>
							
							<?php
							
								}
							
							?>
							</ul>
							<?php
							
								$menu = $pageData->get_menu();
								$menu_count = 0;
								foreach( $menu as $child_menu ){
								
									$childs = $pageData->get_menu( $child_menu['id'] );
								
									echo '<li'.( count($childs) ? ' class="dropdown"' : '' ).'>
									<a'.( count($childs) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '' ).' href="'.$child_menu['href'].'">'.$child_menu['title'];
									
										
										if( count($childs) ) echo '<span class="caret"></span>';
									
									echo '</a>';
									
										if( count($childs) ){
										
											echo '<ul class="dropdown-menu">';
											
												foreach( $childs as $child_childs ){
													
													echo '<li><a href="'.$child_childs['href'].'">'.$child_childs['title'].'</a></li>';
													
												}
													
											echo '</ul>';
											
										}
									
									echo '</li>';
									
									$menu_count++;
									
								}
							
							?>
						</ul>
					</div>
				</div>
			</nav>