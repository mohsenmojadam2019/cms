
	
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
			
				if( isset($_GET['page']) && is_numeric( $_GET['page'] ) ) $page = $_GET['page'];
				else $page = 1;
				
				$start = ($page - 1) * 12;
				
				if( isset($_GET['cat']) && is_numeric( $_GET['cat'] ) ) $cat = $_GET['cat'];
				else $cat = 0;
			
				$products = $pageData->get_products($start,12,$cat);
				$count = $pageData->products_count($cat);
				
				
				foreach( $products as $product ){
					
					echo '<div class="col-xs-12 col-md-3 pull-right">
							<div class="product text-center">
								<a href="./?m=product&id='.$product['id'].'">
									<img src="./images/products/'.$product['index_image'].'" alt="'.$product['title'].'" title="'.$product['title'].'" class="img-responsive" />
									<span class="product-title">'.$product['title'].'</span>
									<span class="product-price">'.$product['price'].' ریال</span>
								</a>
							</div>
				
						</div>';
					
				}
			
				
			
				if( $count > 12 ){
					
					$pages = $count / 12;
					$mod = $count % 12;
					
					$cat = 0;
					if( isset( $_GET['cat'] ) && is_numeric( $_GET['cat'] ) ) $cat = $_GET['cat'];
					
					if( $mod ) $pages++;
					
					echo '<div class="text-center"><ul class="pagination">';
						
						echo '<li'.( $page==1? ' class="disabled"' :'' ).'><a href="./?m=shop&page='.(($page - 1)?($page - 1):1).'&cat='.$cat.'"> >> </a></li>';
						
						for( $i=1; $i <= $pages; $i++ ){
							
							echo '<li'.( $i==$page? ' class="active"' :'' ).'><a href="./?m=shop&page='.$i.'&cat='.$cat.'">'.$i.'</a></li>';
							
						}
						
						echo '<li><a href=""> << </a></li>';
						
					echo '</ul></div>';
					
				}
			
			?>
					
					
			
			</div>
			
		</div>
	
	</section>