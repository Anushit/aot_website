<?php require_once('config.php');?>
<?php include('header.php');?>

<?php
$data = array(
    'select' =>'id,slug,name',
);
$career = postData('careers',$data);

$id = isset($_GET['id']) ? $_GET['id'] : null;
$details = getData('career_details',$id);
$details = $details['data'];

?>

<section class="page-title">
<div class="image-layer" style="background-image:url(images/background/13.jpeg);"></div>
        <div class="auto-container">
        	<h1>Careers</h1>
            <div class="bread-crumb">
            	<ul class="clearfix">
                	<li><a href="<?=BASE_PATH?>index.php">Home</a></li>
                    <li class="active">Careers</li>
                </ul>
            </div>
        </div>
</section>
    
    
    <section class="careers-page">
    	<div class="auto-container">
            <div class="row clearfix">
                <div class="left-side col-md-4 col-sm-5 col-xs-12">
                	<div class="inner">
                        <div class="jobs-widget side-widget">
                        	<h3>Current Opportunities</h3>
                            <div class="widget-inner">
                                <?php if(!empty($career['data'])){ 
                                   foreach ($career['data'] as $careerData) { ?>
                                <ul>
                                    <li><a class="clearfix" href="<?=BASE_PATH?>careers/<?=$careerData['slug']?>"><span class="pull-left"><?=$careerData['name']?></span></a></li>  
                                </ul>
                                <?php }}?>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
                <div class="content-side col-md-8 col-sm-7 col-xs-12">
                	<div class="inner">
                        <div class="career-posts">
                            <div class="career-block">
                                <h2><?=$details['name']?></h2>
                                <p style="text-align: justify;"><?=mb_strimwidth($details['description'],0,300,"...")?></p>
                                <ul>
                                    <li><?=$details['qualification']?></li>
                                    <li><?=$details['experince']?></li>  
                                </ul>
                                <div class="link-box"><a href="<?=BASE_PATH?>applyform/<?=$details['slug']?>" class="theme-btn btn-style-two">Apply</a></div>
                            </div>                            
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    
<?php include('footer.php');?>