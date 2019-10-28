<section class="main-contents">
    <div class="row">
        <div class="col-xs-12 col-md-3 pull-right">
            <?php
            $cats=$pageData->build_cats();
            echo $cats;
            ?>
        </div>
        <div class="col-xs-12 col-md-9 pull-right">
            <?php
//   اگر شماره صفحه در ادرس زده شده بود برو ادرس مورد نظر کاربر در غیراینصورت برو صفحه شماره یک
            if(isset($_GET['page'])&&is_numeric($_GET['page']))$page=$_GET['page'];else $page=1;
//           اگر صفحه اول باشد یک منهای یک ضربدر دوازده همون اولی میشه ولی دومی یعنی میشه دوازده تا بعدی
            $start=($page-1)*12;
//            زمانیکه روی یکی از گزینه های سایدبار کلیک شود
            if(isset($_GET['cat'])&&is_numeric($_GET['cat']))$cat=$_GET['cat'];
            else $cat=0;
            $products=$pageData->get_products($start,12,$cat);
            $count=$pageData->products_count($cat);
            foreach ($products as $product){
                echo'<div class="col-xs-12 col-md-3 pull-right">
                <div class="product text-center">
                <a href="./?m=product&id='.$product['id'].'">
                <img src="./images/products/'.$product['index_image'].'"alt="'.$product['title'].'" title="'.$product['title'].'" class="img-responsive">
                <span class="product-title">'.$product['title'].'</span>
                <span class="product-title">'.$product['price'].'ریال</span>
                
                

</a>
</div>
</div>';
            }
//            صفحه بندی
            if($count>12){
//                تعداد صفحه بدست بیاید
                $pages=$count/12;
//                باقی مانده صفحه که در صحه دیگر اضافه ها برود
                $mod=$count%12;
                if($mod)$pages++;
                echo'<div class="text-center"><ul class="pagination">';
                for($i=1;$i<=$pages;$i++){
                echo '<li'.($i==$page?' class="active"':'').'><a href="./?m=shop&page='.$i.'">'.$i.'</a></li>';
}
echo'<li class ="page-item"><a class="page-link" href="#">previous</a></li>';
    echo '<li class ="page-item"><a class="page-link" href="#">next</a></li>';
echo '</ul></div>';
                }
                ?>
                </div>
                </div>
            


  
</section>