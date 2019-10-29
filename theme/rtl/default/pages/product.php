<?php

	$product = $pageData->get_product( $_GET['id'] );
	$product = $product[0];

?>
	
	<section>
	
		<input type="hidden" name="product_id" id="product_id" value="<?php echo $_GET['id']; ?>" />
	
		<div class="row">
	
			<div class="col-xs-12 col-md-4 pull-right">
			
				<div class="main-img">
					<img src="/cms/images/products/<?php echo $product['index_image']; ?>" alt="<?php echo $product['title']; ?>" title="<?php echo $product['title']; ?>" class="img-responsive" />
					
					<div class="thumbs">
						<?php
						
							$gallery = $pageData->get_gallery( $_GET['id'], 4 );
							
							if( count($gallery) ){
								
								echo '<ul>';
								
								foreach( $gallery as $pic ) {
									
									echo '<li><img src="'.URL.'images/products/'.$pic['img_path'].'" alt="'.$pic['title'].'" class="img-responsive" /></li>';
									
								}
								
								echo '</ul>';
								
							}
						
						?>
					</div>
					
				</div>
			
			</div>
			
			<div class="col-xs-12 col-md-8 pull-right">
			
				<h2><?php echo $product['title']; ?></h2>
				
				<div class="row">
					<div class="col-xs-12 col-md-2 pull-right">
						موجودی انبار:
					</div>
					<div class="col-xs-12 col-md-10 pull-right">
						<?php echo $product['quantity']; ?>
					</div>
				</div>
				
				<div class="row btns">
					
					<div class="col-xs-12 col-md-6 pull-right">
						<a class="cal-btn cal-drp" href="javascript: void(0);"><i class="fa fa-minus"></i></a>
						<input type="number" class="count" value="1" />
						<a class="cal-btn cal-add" href="javascript: void(0);"><i class="fa fa-plus"></i></a>
					</div>
					
					<div class="col-xs-12 col-md-6 pull-right">
						<a href="javascript: void(0);" class="add-to-basket">
							<i class="fa fa-plus"></i>
							افزودن به سبد خرید
						</a>
					</div>
					
				</div>
			
			</div>
			
		</div>
	
	</section>
	
	<section class="desc">
	
		<div class="row">
		
			<div class="col-xs-12 col-md-12">
			
				<h2>بررسی تخصصی <?php echo $product['title']; ?></h2>
				
				<p>
					<?php echo $product['body']; ?>
				</p>
			
			</div>
			
		</div>
	
	</section>