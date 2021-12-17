<?php require_once('config.php');?>
 <?php include('header.php');?>
<?php

$bannerdata = array(
      'table' => 'ci_banners', 
      'where' => 'is_active=1'
    );
$banner = postData('listing',$bannerdata);

$aboutdata = getData('cms',1);
$cms = getData('cms',2);

$servicedata = array(
       'select' => 'id,slug,name,icon,sort_description',
     
    );
$service = postData('service',$servicedata);

$sitedata = getData('sideimage',1);

$imagedata = array(
      'table' => 'ci_scroll_images', 
      'where' => 'is_active=1'
      
    );
$img = postData('listing',$imagedata);
 // print_r($banner['data']);die;

?>  
   <section class="main-slider">
        
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <?php if(isset($banner['data'])){
                    foreach ($banner['data'] as $key => $bannerdata) { 
                        ?>
                	<li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-<?php echo rand(0,4);?>" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">   
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?=ADMIN_PATH.$bannerdata['image']?>"> 
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[15,15,15,15]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['1000','1000','1000','520']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['-80','-80','-20','-40']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>                    
                    	<h2><?=$bannerdata['title_first'];?></h2>
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['600','600','600','320']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['10','10','30','30']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<div class="text"><?=$bannerdata['title_second'];?></div>
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['600','600','600','320']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['120','120','120','120']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<a href="<?=BASE_PATH?>contact" class="theme-btn btn-style-one">Contact Us</a>
                    </div>
                    </li>
                    <?php }} ?> 
                </ul>  
            </div>
        </div>         
    </section>
    
    <section class="about-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h1><?=$aboutdata['data']['cms_title']?></h1>
                <div class="text"></div>
            </div>
            
            <div class="row clearfix">
                <?=mb_strimwidth($aboutdata['data']['cms_contant'],0,2000,"....")?>
            </div>
        </div>
    </section>
    
        
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title centered">
            <h1>Service Provider</h1>
            </div>
           <div class="row clearfix">
            <?php if(!empty($service['data'])){ 
                $i=0;
                foreach ($service['data'] as $serviceData) { 
                  if($i==4){ echo '</div> <div class="row clearfix">'; $i=0; }  ?>
                <div class="service-block-one col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box" style="text-align: center;"><img src="<?=getimage($serviceData['icon'],'noimage.png') ?>" height="50px" width="50px"></span></div>
                        <h3 style="text-align: center;"><a href="<?=BASE_PATH?>service_detail/<?=$serviceData['slug'];?>"><?=$serviceData['name']?></a></h3>
                        <p style="text-align: center;"><?=mb_strimwidth($serviceData['sort_description'],0,50,"...")?></p>
                        <div class="text"></div>
                    </div>
                </div>
            <?php $i++; }
                }?>
            </div>      
        </div>
    </section>

    <section class="why-we">
        <div class="auto-container">
            
            <div class="row clearfix"><div class="text-column pull-right col-md-6 col-sm-12 col-xs-12"><div class="inner"><?=$cms['data']['cms_contant']?>
                        <div class="link-box"><a href="contact.php" class="theme-btn btn-style-two" title="Link: contact.html">Get Start</a></div></div></div><div class="image-column col-md-6 col-sm-8 col-xs-12">
                 <div class="inner">
                     <figure class="image"><img src="<?=ADMIN_PATH.$sitedata['data']['image']?>" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
   	</section>
    
    <section class="sponsors-section">
    	<div class="auto-container">
            <ul class="sponsors-carousel owl-theme owl-carousel">
                <?php if(!empty($img['data'])){ 
                foreach ($img['data'] as $imgData) { ?>
             <li><div class="inner"><a href="#"><img src="<?=ADMIN_PATH.$imgData['image']?>"></a></div></li>
               <?php }}?>
            </ul>
        </div>
    </section>

<?php include('footer.php');?>        