<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>

    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>
    
    <!-- JQUERY -->
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>

    <!-- SLIDER  -->
    <link rel="stylesheet" href="css/lightslider.css">
    <script type="text/javascript" src="js/lightslider.js"></script>

    <!--ICON TITLE-->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Custom  -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/contact.css" type="text/css">

   
    <!-- Animation scroll  library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    
</head>
<body>
    <div class="container-fluid" style="position: relative;">
      
    <!-- header  -->
    <?php include "include/header.html"; ?>

    <div class="container contact-box" style="margin-top: 15vh;">
        <div class="col-12 text-center title">
            <h2 data-aos="fade-up" data-aos-duration="1000">Liên Hệ Với Chúng Tôi</h2>
        </div>
    <div class="container" style="margin-top: 60px;">
        <div class="contact-us">
            <div class="container">
               <div class="contact-form">
                <div class="row">
                    <div class="col-sm-7">                  
                         <form id="ajax-contact"  method="post" role="form">
                             <div class="messages" id="form-messages"></div>
                             <div class="controls">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="form_name validationDefault01">Họ</label>
                                             <input id="form_name validationDefault01" type="text" name="name" class="form-control" required >
                                             <!-- <div class="help-block with-errors"></div> -->
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="form_lastname">Tên</label>
                                             <input id="form_lastname" type="text" name="surname" class="form-control" required >
                                             <!-- <div class="help-block with-errors"></div> -->
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="form_email">Email</label>
                                             <input id="form_email" type="email" name="email" class="form-control"  required="required">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="form_phone">Số Điện Thoại</label>
                                             <input id="form_phone" type="tel" name="phone"  class="form-control" required="required">
                                             
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <label for="form_message">Message</label>
                                             <textarea id="form_message" name="message" class="form-control" rows="4" required="required"></textarea>
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                        <button class="sent-mess btn">Send Message</button>
                                     </div>
                                </div>
                             </div>
     
                         </form>
         
                    </div>
                    <div class="col-sm-5">
                        <div class="row col1">
                            <div class="col-sm-3">
                                <i class="fa fa-map-marker"></i>   Địa Chỉ
                            </div>
                            <div class="col-sm-9">
                                470 Trần Đại Nghĩa, Ngũ Hành Sơn, Đà Nẵng
                            </div>
                        </div>
                        
                         <div class="row col1">
                             <div class="col-sm-3">
                                 <i class="fa fa-phone"></i>   Phone
                             </div>
                             <div class="col-sm-9">
                                 +(84) 8888 232 18
                             </div>
                         </div>
                         <div class="row col1">
                             <div class="col-sm-3">
                                 <i class="fa fa-envelope"></i>   Email
                             </div>
                             <div class="col-sm-9">
                                  <a href="phamgiahuybinh2002@gmail.com">phamgiahuybinh2002@gmail.com</a> <br>
                                   <a href="nguyenquelan2405@gmail.com">nguyenquelan2405@gmail.com</a>
                             </div>
                         </div><br>
                         <iframe width="100%" height="230" frameborder="0" style="border-radius:0px;" scrolling="no" marginheight="0" marginwidth="0" 
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15342.955240961428!2d108.25323740000002!3d15.9750106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1622472641634!5m2!1svi!2s"  style="border-radius:20px;"></iframe>
                    </div>
                </div>
                
               </div>
            </div>
        </div>
    </div>
    </div>

    <!--Footer-->
    <?php include "include/footer.html"; ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
    
            $(function() { 
                AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
            

            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 2000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

            });
            window.addEventListener('load', AOS.refresh); });
                
        </script>
</div>
</body>
</html>