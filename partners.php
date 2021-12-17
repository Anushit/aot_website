<?php require_once('config.php');?>
<?php include('header.php');
$data = array(
    'select' => 'name,image,description',
 
    );
$partner = postData('partner', $data);?>

<section class="page-title">
    <div class="image-layer" style="background-image:url(images/background/13.jpeg);"></div>
        <div class="auto-container">
        	<h1>Our Partners</h1>
            <div class="bread-crumb">
            	<ul class="clearfix">
                	<li><a href="<?=BASE_PATH?>index">Home</a></li>
                    <li class="active">Our Partners</li>
                </ul>
            </div>
        </div>
</section>
    
    
<section class="partners-section">
    	<div class="auto-container">
            <div class="sec-title centered">
            	<h1>Our Royal Partners</h1>
                <div class="text"></div>
            </div>
            <div class="row clearfix">
                <?php if(!empty($partner['data'])){ 
                    $i=0;
                        foreach ($partner['data'] as $partnerData) { 
                            if($i==4){ echo '</div> <div class="row clearfix">'; $i=0; } ?>
                <div class="partner-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                        
                    	<div class="image-box">
                        	<figure class="image"><a href="#"><img src="<?=ADMIN_PATH.$partnerData['image']?>" alt=""></a></figure>
                            <div class="curve"></div>
                        </div>
                        <div class="text" style="text-align: justify;"><?=mb_strimwidth($partnerData['description'],0,200,"....")?></div>
                        
                        
                    </div>
                </div>
                <?php $i++; }}?>
            </div>
        </div>
</section>
       
<section class="partners-section-two">
    <div class="auto-container">
        <div class="row clearfix">                
                <div class="text-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner">
                    	<div class="sec-title">
                            <h1>Our Media Partners</h1>
                        </div>
                        <?php if(!empty($partner['data'])){ 
                        foreach ($partner['data'] as $partnerData) { ?>
                        <div class="text">
                        	<p><?=$partnerData['description']?></p>
                        </div>
                        <?php }} ?>
                    </div>
                </div>
                <div class="logos-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner">
                    	<div class="logos-outer">
                        	<div class="clearfix">
                                <?php if(!empty($partner['data'])){ 
                        foreach ($partner['data'] as $partnerData) { ?>
                            	<div class="logo"><a href="#"><img src="<?=ADMIN_PATH.$partnerData['image']?>" alt=""></a></div>
                                <?php }} ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
    
<?php include('footer.php');?>