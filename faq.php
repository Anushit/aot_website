<?php require_once('config.php');?>

<?php include('header.php');?>
<?php 
$faq_id = isset($_GET['faq_id']) ? $_GET['faq_id'] : null;

$filter = array(
        'faq_id' => $faq_id,
    ); 
$faqs = postData('all_faq',$filter);?>
<?php 
$data = array(
    'table' => 'ci_faq_type',
    );
$faq_type = postData('listing', $data);
?>
    <section class="page-title">
    	<div class="image-layer" style="background-image:url(images/background/13.jpeg);"></div>
        <div class="auto-container">
        	<h1>FAQs</h1>
            <div class="bread-crumb">
            	<ul class="clearfix">
                	<li><a href="index-2.html">Home</a></li>
                    <li class="active">FAQs</li>
                </ul>
            </div>
        </div>
    </section>
    
    
    <section class="faqs-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h1>Frequently Asked Questions</h1>
                <div class="text"></div>
            </div>
            <div class="tabs-box faq-tabs">
                <ul class="tab-buttons clearfix">
                    <?php if(!empty($faq_type['data'])){ 
                          foreach ($faq_type['data'] as $faq) { ?>
                   <button class="theme-btn btn-style-two"><a href="<?=BASE_PATH?>faq?faq_id=<?=$faq['id']?>"><?=$faq['name']?></a><span class="fa fa-question-circle"></span></button>
                     <?php }}?>
                </ul>
               
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-one">
                        <?php if(!empty($faqs['data'])){ 
                          foreach ($faqs['data'] as $fq) {
                          ?>
                        <div class="faq-block">
                            <h3><?=$fq['question']?></h3>
                            <div class="text">
                                <p style="text-align: justify;"><?=$fq['answer']?></p>
                            </div>
                        </div>
                        <?php }}?>  
                    </div>  
                </div>     
            </div>
        </div>
    </section>
    
   <?php include('footer.php');?>