<?php require_once('config.php');?>
<?php include('header.php');
$blogdata = array(
     'select' => 'id,name,image,sort_description, blog_date',
    );
$blog = postData('all_blog',$blogdata);?>
    <section class="page-title">
    	<div class="image-layer" style="background-image:url(images/background/13.jpeg);"></div>
        <div class="auto-container">
        	<h1>Blog</h1>
            <div class="bread-crumb">
            	<ul class="clearfix">
                	<li><a href="<?=BASE_PATH?>index">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </section>
    
    
    <section class="news-section-three">
    	<div class="auto-container">
            <div class="row clearfix">
                <?php if(!empty($blog['data'])){
                $i=0; 
                        foreach ($blog['data'] as $blogData) { 
                            if($i==4){ echo '</div> <div class="row clearfix">'; $i=0; }?>
                <div class="news-block-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="<?=ADMIN_PATH.$blogData['image']?>" width="100" height="100" alt=""></figure>
                    	<h3><?=$blogData['name']?></h3>
                        <div class="post-info"><?=$blogData['blog_date']?></div>
                        <div class="text" style="text-align: justify;"><?=mb_strimwidth($blogData['sort_description'],0,200,"...")?></div>
                    </div>
                </div>
                <?php $i++; }} ?>
            </div>
        </div>
    </section>

<?php include('footer.php');?>
   