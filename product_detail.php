<?php require_once('config.php');?>
<?php
$id = $_GET['id'];

$product = getData('product_details',$id);
?>
<?php include('header.php');?>

<section class="page-title">
    <div class="image-layer" style="background-image:url(images/background/13.jpeg);"></div>
        <div class="auto-container">
        	<h1><?=$product['data']['name']?></h1>
            <div class="bread-crumb">
            	<ul class="clearfix">
                	<li><a href="<?=BASE_PATH?>index">Home</a></li>
                    <li class="active"><?=$product['data']['name']?></li>
                </ul>
            </div>
        </div>
</section>

<section class="service-single">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-side pull-right col-md-8 col-sm-12 col-xs-12">
                <div class="inner">
                    <div class="content-block">
                        <h2><?=$product['data']['meta_title']?></h2>
                        <p style="text-align: justify;"><?=$product['data']['sort_description']?></p>
                    </div>
                    <div class="content-block two-column">
                        <div class="row clearfix">
                            <div class="text-column col-md-8 col-sm-8 col-xs-12">
                                <h2><?=$product['data']['meta_keyword']?></h2>
                                <p style="text-align: justify;"><?=mb_strimwidth($product['data']['description'],0,200,"...")?></p>
                            </div>
                            <div class="image-column col-md-4 col-sm-4 col-xs-12">
                            <figure class="image"><img src="<?=ADMIN_PATH.$product['data']['image']?>" width="100" height="100" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="nav-side col-md-4 col-sm-12 col-xs-12">
                <div class="inner">
                    <h2>Product Inquery</h2>
                        <div class="link-box"><a href="<?=BASE_PATH?>product_inquiry/<?=$product['data']['slug']?>" class="theme-btn btn-style-two">Inquery Here</a></div>
                </div>
            </div>        
        </div>
    </div>
</section>
    
<?php include('footer.php');?>