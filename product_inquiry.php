<?php require_once('config.php');?>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;
$product = getData('product_details',$id);
$productInquery = $product['data'];

?>

<?php
if(isset($_POST['submit'])){ 
    session_start();
    $msg = '';
    $error = '';
    if($error==''){
        $data = $_POST;  
        $contactData = postData('productinquery', $data);
        $msg = $contactData['message'];
    } 
} 

?>
<?php include('header.php');?>

    <section class="page-title">
        <div class="image-layer" style="background-image:url(images/background/13.jpeg);"></div>
        <div class="auto-container">
            <h1>Inquery Here</h1>
            <div class="bread-crumb">
                <ul class="clearfix">
                    <li><a href="<?BASE_PATH?>index">Home</a></li>
                    <li class="active">Service Inquery Here</li>
                </ul>
            </div>
        </div>
    </section>
    
    
    <section class="contact-section">
        <div class="auto-container">
            <h3 style="color:red" align="center"> <?php 
                  if(!empty($error)){
                    echo $error;
                        } 
                  ?></h3>
             <h3 style="color:green" align="center"> <?php 
                  if(!empty($msg)){
                    echo $msg;
                        } 
                  ?></h3>
            <div class="sec-title centered">
                <h1>Inquery For <?=$productInquery['name']?></h1>
                <div class="text"></div>
            </div>
            
            <div class="form-container">
            
                <div class="form-style-one quote-form">
                    <form method="post" action="<?=BASE_PATH.'product_inquiry/'.$productInquery['slug'] ?>" id="contactFrom" name="contactFrom">
                        <div class="row clearfix">

                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <input type="text" name="name" id="name" value="" placeholder="Full Name">
                                <span id="error_name" style="display:none; color:red"></span>
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
                                <textarea name="message" id="message"placeholder="Write Message"></textarea>
                                <span id="error_name" style="display:none; color:red"></span>
                            </div>
                            
                             <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-center"><button type="submit" name="submit"class="theme-btn btn-style-two submitData" id="submit">Submit</button></div>
                            </div> 
                        </div> 
                    </form>
                </div>

            </div>
        </div>
    </section>
    
<?php include('footer.php');?>
<script type="text/javascript">
$('#contactFrom :input[type="submit"]').prop('disabled', false);
//Refresh Captcha
$(document).ready(function(){
    $("#reloadCaptcha").click(function(){
        var captchaImage = $('#captcha').attr('src');   
        captchaImage = captchaImage.substring(0,captchaImage.lastIndexOf("?"));
        captchaImage = captchaImage+"?rand="+Math.random()*1000;
        $('#captcha').attr('src', captchaImage);
    });

$(document).on("click", ".submitData", function(e){  
    if ($("#contactFrom").valid()) {
       /// $('#contactFrom :input[type="submit"]').prop('disabled', true);
        $("#contactFrom").submit();
    }
}); 

$("#contactFrom").validate({
    rules: {
        name: "required",
        email: {required: true, email: true},
        mobile: {
            required: true, 
            number: true,
            minlength:10,
            maxlength:10,
        },
        subject: "required",
        message: "required", 
        securityCode: "required", 
    },
    messages: {
        name: "Please Enter Full Name",
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
        message: "Please Enter Message", 
        securityCode: "Please Enter Capcha Code", 
    }
}); 

});

</script>