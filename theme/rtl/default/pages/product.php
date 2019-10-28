<?php
$product=$pageData->get_product($_GET['id']);
$product=$product[0];
?>

<section>
    <div class="row">
        <div class="col-xs-12 col-md-4 pull-right" >
            <div class="">
                <img src="/cms/images/products/<?php echo $product['index_image']; ?>" alt="<?php echo $product['title'];?>"title="<?php echo $product['title'];?>"class="img-responsive"/>
            </div>
        </div>
        <div class="col-xs-12 col-md-8 pull-right">
            <h2><?php echo $product['title'];?></h2>
            <div class="row">
                <div class="col-xs-12 col-md-2 pull-right">
                    موجودی انبار:
                </div>
                <div class="col-xs-12 col-md-10 pull-right">
                    <?php echo $product['quantity'];?>

                </div>
            </div>
            <div class="row btns">
            <div class="col-xs-12 col-md-6 pull-right">
                <input type="number" class="count">
            </div>
            <div class="col-xs-12 col-md-6 pull-right">
                <a href="javascript:void(0); class="add-to-basket"><i class="fa fa-plus"></i>افزودن به سبد خرید</a>
            </div>
            </div>
        </div>
    </div>
</section>
<section class="desc">
    <div class="row">
    <div class="col-xs-12 col-md-12">
        <h2><?php echo $product['title'];?>بررسی تخصصی </h2>
        <p>
            <?php echo $product['body']; ?>
        </p>
    </div>
    </div>
</section>











