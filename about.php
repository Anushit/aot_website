<?php include('config.php');?>
<?php 
$about_setting = getData('cms',3);?>

<?php include('header.php');?>
<section class="page-title">
    <div class="image-layer" style="background-image:url(images/background/13.jpeg);"></div>
        <div class="auto-container">
        	<h1>About Us</h1>
            <div class="bread-crumb">
            	<ul class="clearfix">
                	<li><a href="<?=BASE_PATH?>index">Home</a></li>
                    <li class="active"><?=$about_setting['data']['cms_name'];?></li>
                </ul>
            </div>
        </div>
</section>
<?=$about_setting['data']['cms_contant'];?>   

<?php include('footer.php');?>
    
    
    