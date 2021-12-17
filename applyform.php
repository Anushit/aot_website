<?php require_once('config.php');

$id = isset($_GET['id']) ? $_GET['id'] : null;
$applyData = getData('career_details',$id);
$apply = $applyData['data'];
?>
<?php
if(isset($_POST['submit'])){ 
$error ='';

 $targetfolder = "admin/assets/img/applyjob/";
 $new_image_name = $_POST['fname'].rand(10, 20).".pdf";
 $targetfolder = $targetfolder . basename( $new_image_name) ;
 $ok=1;
 $file_type=$_FILES['cv']['type'];
   if ($file_type=="application/pdf" ) {
       if(move_uploaded_file($_FILES['cv']['tmp_name'], $targetfolder))
       {
        $file = "assets/img/applyjob/".$new_image_name;
       }
       else {
        $error = "Problem uploading file";
       }
   }
   else {
     $error=  "You may only upload PDFs files.";
    }

 
    if($error==''){
        $doc = array('cv'=>$file);
        $_POST = array_merge($_POST,$doc);
        
        $data = $_POST;  
        $contactData = postData('saveapplyjob', $data);  
        
        $msg = $contactData['message'];
    } 
} 
?>
<?php include('header.php');?>
<section class="page-title">
    <div class="image-layer" style="background-image:url(<?=BASE_PATH?>images/background/13.jpeg);"></div>
        <div class="auto-container">
            <h1>join With Us</h1>
            <div class="bread-crumb">
                <ul class="clearfix">
                    <li><a href="<?BASE_PATH?>index">Home</a></li>
                    <li class="active">join Us</li>
                </ul>
            </div>
        </div>
</section>
    
    
    <section class="contact-section">
        <div class="auto-container">
             <h3 style="color:green" align="center"> <?php 
                  if(!empty($msg)){
                    echo $msg;
                        } 
                  ?></h3>
            <div class="sec-title centered">
                <h1>Apply Form For <?=$apply['name']?></h1>
                <div class="text"></div>
            </div>
            
            <div class="form-container">
            
                <!--Quote Form-->
                <div class="form-style-one quote-form">
                    <form method="post" action="<?=BASE_PATH.'applyform/'.$apply['slug']?>" id="apply-form" name="applyForm" enctype="multipart/form-data">
                        <div class="row clearfix">
                        <input type="hidden" name="career_id" id="career_id" value="<?=$apply['id']?>">

                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <input type="text" name="fname" id="fname" value="" placeholder="First Name">
                                <span id="error_name" style="color:red"></span>
                            </div>
                            
                            
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <input type="text" name="email" id="email" value="" placeholder="Email">
                                <span id="error_name" style="display:none; color:red"></span>
                            </div>
                            
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <input type="text" name="mobile" id="mobile"value="" placeholder="mobile">
                                <span id="error_name" style="display:none; color:red"></span>
                            </div>
                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="description" id="description"placeholder="description"></textarea>
                                <span id="error_name" style="display:none; color:red"></span>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <input type="file" name="cv" id="cv"value="" placeholder="cv upload">
                                <span id="error_name" style="display:none; color:red"></span>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-center"><button type="submit" name="submit"class="theme-btn btn-style-two submit" id="submit">Submit</button></div>
                            </div> 
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </section>
    
<?php include('footer.php');?>
<script type="text/javascript">
$(document).on("click", ".submit", function(e){  
    if ($("#apply-form").valid()) {
       /// $('#contactFrom :input[type="submit"]').prop('disabled', true);
        $("#apply-form").submit();
    }
}); 

$("#apply-form").validate({
    rules: {
        fname: "required",
        email: {required: true, email: true},
        mobile: {
            required: true, 
            number: true,
            minlength:10,
            maxlength:10,
        },
        subject: "required",
        description: "required", 
        cv: "required",
    
    },
    messages: {
        fname: "Please Enter First Name",
        email: { 
          "required": "Please Enter Email Address",
          "email": "Please Enter Valid Email Address",
        },
        mobile: { 
          "required": "Please Enter Mobile No.",
          "number": "Please Enter Valid Mobile No",
          "minlength": "Mobile No Should Be 10 Digits",
          "maxlength": "Mobile No Should Be 10 Digits",
        },
        subject: "Please Enter Subject",
        description: "Please Enter Message", 
        cv: "please Enter File",
       
    }
}); 


</script>

