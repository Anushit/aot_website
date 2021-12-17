<?php require_once('config.php');?>

<?php include('header.php');?>

<?php
$data = array(
      'table' => 'ci_testimonials', 
      'where' => 'is_active=1'
    );
$testimonial = postData('listing',$data);

$footer_setting = getData('setting');

$facebook_link = $twitter_link = $linkedin_link = $instagram_link = $logo = $address= $email = $phone = "";; 
 

if(isset($footer_setting['data']['facebook_link']) && !empty($footer_setting['data']['facebook_link'])){
    $facebook_link = $footer_setting['data']['facebook_link'];
}
if(isset($footer_setting['data']['twitter_link']) && !empty($footer_setting['data']['twitter_link'])){
    $twitter_link = $footer_setting['data']['twitter_link'];
}
if(isset($footer_setting['data']['linkedin_link']) && !empty($footer_setting['data']['linkedin_link'])){
    $linkedin_link = $footer_setting['data']['linkedin_link'];
}

if(isset($footer_setting['data']['instagram_link']) && !empty($footer_setting['data']['instagram_link'])){
    $instagram_link = $footer_setting['data']['instagram_link'];
}
?>
    
    
    <section class="page-title">
        <div class="image-layer" style="background-image:url(images/background/13.jpeg);"></div>
        <div class="auto-container">
            <h1>Testimonials</h1>
            <div class="bread-crumb">
                <ul class="clearfix">
                    <li><a href="<?=BASE_PATH?>index">Home</a></li>
                    <li class="active">Testimonials</li>
                </ul>
            </div>
        </div>
    </section>
    
    
    <section class="team-section no-bg">
        <div class="auto-container">
            <div class="sec-title centered">
                <h1>Our Advisors</h1>
                <div class="text"></div>
            </div>
            <div class="row clearfix">
                <?php if(!empty($testimonial['data'])){ 
                    $i=0;
                        foreach ($testimonial['data'] as $testData) { 
                            if($i==4){ echo '</div> <div class="row clearfix">'; $i=0; }  ?>
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img src="<?=ADMIN_PATH.$testData['image']?>" height="150px" width="150px" alt=""></a></figure>
                        <div class="lower-box">
                            <h3><a href="#"><?=$testData['name']?></a></h3>
                            <div class="designation"><?=$testData['designation']?></div>
                            <p style="text-align: justify;"><a href="#"><?=mb_strimwidth($testData['message'],0,50,"...")?></a></p>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li class="<?php echo ($facebook_link != "")?"":"hide"; ?>"><a href="<?php echo $facebook_link;?>" target="_blank"><span class="fa fa-facebook-f"></span></a></li>
                                    <li class="<?php echo ($twitter_link != "")?"":"hide"; ?>"><a href="<?php echo $twitter_link;?>"target="_blank"><span class="fa fa-twitter"></span></a></li>
                                    <li class="<?php echo ($linkedin_link != "")?"":"hide"; ?>"><a href="<?php echo $linkedin_link;?>" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                                    <li class="<?php echo ($instagram_link != "")?"":"hide"; ?>"><a href="<?php echo $instagram_link;?>" target="_blank"><span class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; }}?>
            </div>
        </div>
    </section>
    
    
<?php include('footer.php');?>


