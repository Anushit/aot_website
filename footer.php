<?php require_once('config.php');?>
<?php

$terms = getData('cms',5);

$footer_setting = getData('setting');

$facebook_link = $twitter_link = $linkedin_link = $instagram_link = $logo = $address= $email = $phone = ""; 
 

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
if(isset($footer_setting['data']['sticky_logo']) && !empty($footer_setting['data']['sticky_logo'])){
    $logo = $footer_setting['data']['sticky_logo'];
}

if(isset($footer_setting['data']['address']) && !empty($footer_setting['data']['address'])){
    $address = $footer_setting['data']['address'];
}
if(isset($footer_setting['data']['email']) && !empty($footer_setting['data']['email'])){
    $email = $footer_setting['data']['email'];
}
if(isset($footer_setting['data']['phone']) && !empty($footer_setting['data']['phone'])){
    $phone = $footer_setting['data']['phone'];
}
if(isset($footer_setting['data']['whatsapp_button']) && !empty($footer_setting['data']['whatsapp_button'])){
    $whatsapp_button = $footer_setting['data']['whatsapp_button'];
}

$careerdata = array(
      'table' => 'ci_career', 
      'where' => 'is_active=1'
    );
$career = postData('listname',$careerdata);
?>   
<footer class="main-footer">
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">    
                        <div class="row clearfix">
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget about-widget">
                                    <div class="widget-inner">
                                        <div class="logo<?php echo ($logo != "")?"":"hide"; ?>"><img src="<?=ADMIN_PATH.$logo; ?>" alt="" width=""></div>
                                        <div class="text text-justify"><?=$footer_setting['data']['meta_description'];?></div>
                                        <div class="social-links">
                                            <ul class="clearfix">
                                                <li class="<?php echo ($facebook_link != "")?"":"hide"; ?>"><a href="<?php echo $facebook_link;?> target="_blank"><span class="fa fa-facebook-f"></span></a></li>
                                                <li class="<?php echo ($twitter_link != "")?"":"hide"; ?>"><a href="<?php echo $twitter_link;?>"target="_blank"><span class="fa fa-twitter"></span></a></li>
                                                <li class="<?php echo ($linkedin_link != "")?"":"hide"; ?>"><a href="<?php echo $linkedin_link;?>" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                                                <li class="<?php echo ($instagram_link != "")?"":"hide"; ?>"><a href="<?php echo $instagram_link;?>" target="_blank"><span class="fa fa-instagram"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <div class="widget-inner">
                                        <h3>Company Link</h3>
                                        <div class="links">
                                            <ul>
                                                <li><a href="<?=BASE_PATH?>service">Services</a></li>
                                                <li><a href="<?=BASE_PATH?>products">Products</a></li>
                                                <li><a href="<?=BASE_PATH?>index">Home</a></li>
                                                <li><a href="<?=BASE_PATH?>terms_condition"><?=$terms['data']['cms_title']?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">    
                        <div class="row clearfix">
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget info-widget">
                                    <div class="widget-inner">
                                        <h3>Contact Us</h3>
                                        <div class="info">
                                            <ul>
                                                <li class="<?php echo ($address != "")?"":"hide"; ?> clearfix"><strong>Address: </strong> <span class="txt"><?php echo $address;?></span></li>
                                                <li class="<?php echo ($phone != "")?"":"hide"; ?> clearfix"><strong>Phone: </strong> <span class="txt"><?php echo $phone;?></span></li>
                                                <li class="<?php echo ($email != "")?"":"hide"; ?> clearfix"><strong>Email: </strong> <span class="txt"><?php echo $email;?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget gallery-widget">
                                 <h3>Hire Us</h3>
                                 <div class="links">
                                <?php if(!empty($career['data'])){ 
                                  foreach ($career['data'] as $careerData) { ?>
                                <ul>
                                    <li><a href="<?=BASE_PATH?>careers/<?=$careerData['slug']?>"><?=$careerData['name']?>
                                    </li>
                                </ul>
                                <?php }} ?>
                            </div>
                               </div>
                           </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>

                
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="copyright"><?=$footer_setting['data']['copyright']?><a href="http://www.adiyogitechnosoft.com" target="_blank">Adiyogi Technosoft</a></div>
                    </div>    
                </div>
            </div>
        </div>
</footer>
<div class="<?php echo ($whatsapp_button != "")?"":"hide"; ?>">
    <?=$whatsapp_button?>
</div>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
<script src="<?=BASE_PATH?>js/jquery.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
<script src="<?=BASE_PATH?>plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?=BASE_PATH?>plugins/revolution/js/jquery.themepunch.tools.min.js"></script> 
<script src="<?=BASE_PATH?>plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?=BASE_PATH?>plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?=BASE_PATH?>plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?=BASE_PATH?>plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?=BASE_PATH?>plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?=BASE_PATH?>plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?=BASE_PATH?>plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?=BASE_PATH?>plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?=BASE_PATH?>js/main-slider-script.js"></script>
<script src="<?=BASE_PATH?>js/bootstrap.min.js"></script>
<script src="<?=BASE_PATH?>js/jquery.fancybox.js"></script>
<script src="<?=BASE_PATH?>js/jquery-ui.js"></script>
<script src="<?=BASE_PATH?>js/owl.js"></script>
<script src="<?=BASE_PATH?>js/wow.js"></script>
<script src="<?=BASE_PATH?>js/script.js"></script>
</body>
</html>