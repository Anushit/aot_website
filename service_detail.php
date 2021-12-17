<?php require_once('config.php');?>
<?php
$id = $_GET['id'];
$details = getData('service_details',$id);?>
<?php include('header.php');?>

<section class="page-title">
    <div class="image-layer" style="background-image:url(<?=BASE_PATH?>images/background/13.jpeg);"></div>
        <div class="auto-container">
        	<h1><?=$details['data']['name']?></h1>
            <div class="bread-crumb">
            	<ul class="clearfix">
                	<li><a href="<?=BASE_PATH?>index">Home</a></li>
                    <li class="active"><?=$details['data']['name']?></li>
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
                        <h2><?=$details['data']['meta_title']?></h2>
                        <p style="text-align: justify;"><?=mb_strimwidth($details['data']['sort_description'],0,100,"...")?></p>
                    </div>
                    <div class="content-block two-column">
                        <div class="row clearfix">
                            <div class="text-column col-md-8 col-sm-8 col-xs-12">
                                <h2><?=$details['data']['meta_keyword']?></h2>
                                <p style="text-align: justify;"><?=$details['data']['description']?></p>
                            </div>
                            <div class="image-column col-md-4 col-sm-4 col-xs-12">
                            <figure class="image"><img src="<?=ADMIN_PATH.$details['data']['image']?>" width="100" height="100" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-side col-md-4 col-sm-12 col-xs-12">
                <div class="inner">
                    <ul class="links-box">
                        <?php foreach($service['data'] as $serviceData){
                                     ?>
                            <li><a href="<?=BASE_PATH?>service_detail/<?=$serviceData['slug']?>"><?=$serviceData['name'];?></a></li>
                        <?php }?>
                    </ul>
                </div>
            </div> 
            <div class="nav-side col-md-4 col-sm-12 col-xs-12">
                <div class="inner">
                    <h2>Service Inquery</h2>
                        <div class="link-box"><a href="<?=BASE_PATH?>service_inquery/<?=$details['data']['slug']?>" class="theme-btn btn-style-two">Inquery Here</a></div>
                </div>
            </div>        
        </div>
    </div>
</section>
    
<?php include('footer.php');?>