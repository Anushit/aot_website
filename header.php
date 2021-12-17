<?php require_once('config.php');?>
<?php

$servicedata = array(
      'table' => 'ci_services', 
      'where' => 'is_active=1'
      
    );
$service = postData('listname',$servicedata);
$filter = array(
        'table'=>'ci_categories',
        'where'=> 'is_active=1'

    ); 
$catprod = postData('allcategory', $filter);


$header_setting = getData('setting');

if(isset($header_setting['data']['meta_title']) && !empty($header_setting['data']['meta_title'])){
    $meta_title = $header_setting['data']['meta_title'];
}
if(isset($header_setting['data']['favicon']) && !empty($header_setting['data']['favicon'])){
    $icon = $header_setting['data']['favicon'];
}
if(isset($header_setting['data']['logo']) && !empty($header_setting['data']['logo'])){
    $logo = $header_setting['data']['logo'];
}
if(isset($header_setting['data']['sticky_logo']) && !empty($header_setting['data']['sticky_logo'])){
    $stlogo = $header_setting['data']['sticky_logo'];
}
if(isset($header_setting['data']['address']) && !empty($header_setting['data']['address'])){
    $address = $header_setting['data']['address'];
}
if(isset($header_setting['data']['email']) && !empty($header_setting['data']['email'])){
    $email = $header_setting['data']['email'];
}
if(isset($header_setting['data']['phone']) && !empty($header_setting['data']['phone'])){
    $phone = $header_setting['data']['phone'];
}
$url= explode('/',$_SERVER['REQUEST_URI']);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?=$meta_title;?></title>
<link href="<?=BASE_PATH?>css/bootstrap.css" rel="stylesheet">
<link href="<?=BASE_PATH?>plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
<link href="<?=BASE_PATH?>plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
<link href="<?=BASE_PATH?>plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
<link href="<?=BASE_PATH?>css/style.css" rel="stylesheet">
<link href="<?=BASE_PATH?>css/responsive.css" rel="stylesheet">
<link rel="<?=BASE_PATH?>shortcut icon" href="<?=ADMIN_PATH.$icon?>" type="image/x-icon">
<link rel="<?=BASE_PATH?>icon" href="<?=ADMIN_PATH.$icon?>" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

<div class="page-wrapper">
    <div class="preloader"></div>
    <header class="main-header header-style-one">
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	<div class="logo-box">
                    	<div class="logo<?php echo ($logo != "")?"":"hide"; ?>"><a href="<?=BASE_PATH?>index"><img src="<?=ADMIN_PATH.$logo?>" width="240"></a></div>
                    </div>
                    
                    <div class="upper-right">
                    	<div class="clearfix">
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="<?php echo ($phone != "")?"":"hide"; ?> flaticon-phone-book"></span></div>
                                <ul>
                                    <li class="<?php echo ($phone != "")?"":"hide"; ?>"><a href="tel:<?=$phone;?>">Phone<br><?=$phone;?></a></li>
                                </ul>
                            </div>
                            
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="<?php echo ($email != "")?"":"hide"; ?>flaticon-envelope"></span></div>
                                <ul>
                                    <li class="<?php echo ($email != "")?"":"hide"; ?>"><a href="mailto:<?=$email;?>">Email <br><?=$email;?></a></li>
                                </ul>
                            </div>
                            
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class=<?php echo ($address != "")?"":"hide"; ?>"flaticon-placeholder-2"></span></div>
                                <ul>
                                    <li class="<?php echo ($address != "")?"":"hide"; ?>">Address<br><?=$address;?></li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        
        <div class="header-lower" style="background: #337ab7">
        	<div class="auto-container">
            	<div class="nav-outer clearfix">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="<?=BASE_PATH?>index">Home</a>
                                </li>
                                <li><a href="<?=BASE_PATH?>about">About us</a>
                                </li>
                                <li class="dropdown"><a href="<?=BASE_PATH?>service">Services</a>
									<ul>
                                        
										<?php foreach($service['data'] as $serviceData){ ?>
                                        <li><a href="<?=BASE_PATH?>service_detail/<?=$serviceData['slug'];?>"><?=$serviceData['name'];?></a></li>
                                        <?php }?>
									</ul>
								</li>
                                 <li class="dropdown"><a href="<?=BASE_PATH?>products">Products</a>
                                    <ul>
                                        
                                       <?php if(!empty($catprod['data'])){ 
                                       foreach ($catprod['data'] as $cat) { ?>
                                  <li><a href="<?=BASE_PATH?>products.php?cat_id=<?=$cat['id']?>"><?=$cat['name']?></a></li>

                                      <?php }}?>
                                    </ul>
                                </li>
                                <li><a href="<?=BASE_PATH?>careers">Careers</a></li>
                                <li><a href="<?=BASE_PATH?>testimonial">Testimonials</a></li>
                                <li><a href="<?=BASE_PATH?>partners">Partners</a></li>
                                <li><a href="<?=BASE_PATH?>faq">FAQs</a></li>     
                                <li><a href="<?=BASE_PATH?>blog">Blog</a>
                                </li>
                                <li><a href="<?=BASE_PATH?>contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    
                    <div class="options-box clearfix">
                    	
                        <div class="search-box">
                           <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu1">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="get" action="<?=BASE_PATH?>service">
                                                <div class="form-group">
                                                    <input type="text" name="search" placeholder="Search For Services" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <div class="logo pull-left">
                    <a href="" class="img-responsive<?php echo ($stlogo != "")?"":"hide"; ?>" ><img src="<?=ADMIN_PATH.$stlogo?>"></a>
                </div>
                
                <div class="right-col pull-right">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="<?=BASE_PATH?>index">Home</a>
                                </li>
                                <li><a href="<?=BASE_PATH?>about">About us</a>
                                </li>
                                <li class="dropdown"><a href="<?=BASE_PATH?>service">Services</a>
                                    <ul>
                                        
                                        <?php foreach($service['data'] as $serviceData){ ?>
                                        <li><a href="<?=BASE_PATH?>service_detail/<?=$serviceData['slug'];?>"><?=$serviceData['name'];?></a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="<?=BASE_PATH?>products">Products</a>
                                    <ul>
                                        
                                       <?php if(!empty($catprod['data'])){ 
                                       foreach ($catprod['data'] as $cat) { ?>
                                  <li><a href="<?=BASE_PATH?>products.php?cat_id=<?=$cat['id']?>"><?=$cat['name']?></a></li>

                                      <?php }}?>
                                    </ul>
                                </li>
                                <li><a href="<?=BASE_PATH?>careers">Careers</a></li>
                                <li><a href="<?=BASE_PATH?>testimonial">Testimonials</a></li>
                                <li><a href="<?=BASE_PATH?>partners">Partners</a></li>
                                <li><a href="<?=BASE_PATH?>faq">FAQs</a></li>
                                    
                                <li><a href="<?=BASE_PATH?>blog">Blog</a>
                                </li>
                                <li><a href="<?=BASE_PATH?>contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
