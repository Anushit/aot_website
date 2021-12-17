<?php require_once('config.php');?>
<?php include('header.php');?>
<?php

$search = isset($_GET['search']) ? $_GET['search'] : null;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$per_page = 10;

  $servicedata = array(
      'select' => 'id,slug,name,image,sort_description',
      'search' => $search,
      'per_page'=> $per_page,
      'page' => $page,

      
    );
$service = postData('service',$servicedata);

 ?>
<section class="page-title">
    <div class="image-layer" style="background-image:url(images/background/13.jpeg);"></div>
        <div class="auto-container">
            <h1>Our Services</h1>
            <div class="bread-crumb">
                <ul class="clearfix">
                    <li><a href="<?=BASE_PATH?>index">Home</a></li>
                    <li class="active">Our Services</li>
                </ul>
            </div>
        </div>
</section>
    
<section class="services-five">
    <div class="auto-container">
        <div class="sec-title centered">
            <h1>Our Services</h1>
        </div>   
        <div class="row clearfix">
            <?php if(!empty($service['data'])){ 
                $i=0;
                    foreach ($service['data'] as $serviceData) { 
                        if($i==3){ echo '</div> <div class="row clearfix">'; $i=0; }?>
                <div class="service-block-four col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><a href="<?=BASE_PATH?>service_detail/<?=$serviceData['slug']?>"><img src="<?=ADMIN_PATH.$serviceData['image']?>" width="100" height="100"alt=""></a></figure>
                        <div class="lower-box">
                            <h3><a href="<?=BASE_PATH?>service_detail/<?=$serviceData['slug']?>"><?=$serviceData['name']?></a></h3>
                            <div class="text text-justify"><?=mb_strimwidth($serviceData['sort_description'],0,100,"...")?>"</div>
                        </div>
                    </div>
                </div>
            <?php $i++;}
        } ?>       
        </div>
    </div>

</section>
<nav aria-label="..." class="container" style="text-align:right;">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <?php   
              if(isset($service['count_data']) && $service['count_data'] > 0){

                $total_services = $service['count_data'];
              $total_page =  ceil($total_services / $per_page);
              for($page = 1; $page <= $total_page; $page++){
                
                ?>
              <li> <a href="<?=BASE_PATH?>service.php?page=<?= $page?>"><?= $page?></a> </li>

            <?php  }
          } 
              ?>
              <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>

                      
    </li>
  </ul>
</nav>


    

<?php include('footer.php');?>