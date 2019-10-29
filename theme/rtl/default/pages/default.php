
	
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
			
				$products = $pageData->get_products();
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
			
			?>
					
					
			
			</div>
			
		</div>
	
	</section>