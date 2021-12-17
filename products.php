<?php require_once('config.php');?>
<?php include('header.php');?>
<?php

$cat_id = isset($_GET['cat_id']) ? $_GET['cat_id'] : null;

  $productdata = array(
      'cat_id' => $cat_id,
      
    );
$product = postData('get_products',$productdata);

 ?> 
<section class="page-title">
    <div class="image-layer" style="background-image:url(images/background/13.jpeg);"></div>
        <div class="auto-container">
            <h1>Our Products</h1>
            <div class="bread-crumb">
                <ul class="clearfix">
                    <li><a href="<?=BASE_PATH?>index">Home</a></li>
                    <li class="active">Our Products</li>
                </ul>
            </div>
        </div>
</section>
    
<section class="services-five">
    <div class="auto-container">
        <div class="sec-title centered">
            <h1>Our Products</h1>
        </div>   
        <div class="row clearfix">
            <?php if(!empty($product['data'])){ 
                $i=0;
                    foreach ($product['data'] as $productdata) {
                    if($i==3){ echo '</div> <div class="row clearfix">'; $i=0; } ?>
                <div class="service-block-four col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><a href="<?=BASE_PATH?>product_detail/<?=$productdata['slug']?>"><img src="<?=ADMIN_PATH.$productdata['image']?>" width="200" height="200" alt=""></a></figure>
                        <div class="lower-box">
                            <h3><a href="<?=BASE_PATH?>product_detail/<?=$productdata['slug']?>"><?=$productdata['name']?></a></h3>
                            <div class="text" style="text-align: justify;"><?=mb_strimwidth($productdata['sort_description'],0,200,"...")?>"</div>
                        </div>
                    </div>
                </div>
            <?php $i++; }} ?>       
        </div>
    </div>
</section>  
<?php include('footer.php');?>