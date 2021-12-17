<?php require_once('config.php');?>

<?php include('header.php');

$terms_setting = getData('cms',5);?>
    
<section class="page-title">
    <div class="image-layer" style="background-image:url(images/background/13.jpeg);"></div>
        <div class="auto-container">
        	<h1><?=$terms_setting['data']['cms_title']?></h1>
            <div class="bread-crumb">
            	<ul class="clearfix">
                	<li><a href="<?=BASE_PATH?>index">Home</a></li>
                    <li class="active"><?=$terms_setting['data']['meta_title']?></li>
                </ul>
            </div>
        </div>
</section>
      
<section class="faqs-section">
    <div class="auto-container">
        <div class="sec-title centered">
            <h1><?=$terms_setting['data']['meta_keyword'];?></h1>
            <div class="text"><?=$terms_setting['data']['meta_description'];?></div>
        </div>
        <div class="tabs-box faq-tabs">
            <div class="tabs-content">
                <div class="tab active-tab" id="tab-one">
                    <div class="faq-block">
                        <?=$terms_setting['data']['cms_contant'];?>
                    </div>
                </div>
                    
            </div>
        </div>       
    </div>
</section>
<?php include('footer.php');?>