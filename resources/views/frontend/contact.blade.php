<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>CONTACT US | BT AUTO REPAIR</title>
<link rel="shortcut icon" href="images/favicon.png">
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Main Header -->
    @include('frontend.includes.header')
    <!--End Main Header -->
    
     <!-- Page Banner -->
    <section class="page-banner" style="background-image:url(images/background/page-banner-1.jpg);">
         <div class="auto-container">
            <div class="page-title"><h1>Contact Us</h1></div>
            <div class="bread-crumb text-right">
                <span class="initial-text">you are here: </span>
                <a href="blog.html">Pages</a>
                <span class="current">Contact Us</span>
            </div>
        </div>
    </section>
    
    <!-- Sidebar Page -->
    <div class="sidebar-page">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Left Content -->
                <section class="left-content col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    
                    
                    <!-- Contact Form -->
                    <div class="contact-form">
                            
                        <div class="sec-title"><h3 class="skew-lines">Leave a Message</h3></div>
                        <div class="msg-text"></div>
                        <!--Contact Form-->
                         <form class="pq-contactform pq-applyform" action="/contactUsEmail" method="POST" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="row clearfix">
                                
                                <div class="col-md-12 col-sm-12 col-xs-12" style="padding: 0">
                                    
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-groups">
                                        <label class="form-label">Name <span style="color: #D1292B;">*</span></label>
                                        <input type="text" name="name" value="" placeholder="Enter Your Name" required>
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-groups">
                                        <label class="form-label">Email <span style="color: #D1292B;">*</span></label>
                                        <input type="email" name="email" value="" placeholder="Enter Your Email Address" required>
                                    </div>
                                    
                                     <div class="col-md-4 col-sm-12 col-xs-12 form-groups">
                                        <label class="form-label">Subject <span style="color: #D1292B;">*</span></label>
                                        <input type="text" name="subject" value="" placeholder="Enter a Subject" required>
                                    </div>

                                     <div class="col-md-12 col-sm-12 col-xs-12 form-groups">
                                       <label class="form-label">Message <span style="color: #D1292B;">*</span> </label>
                                        <textarea style="height: 88px;" name="message" rows="2" placeholder="Type Message Here" required></textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-groups text-right">
                                 <input type="submit" name="submit" onclick="showAlert()"  class="theme-btn dark-btn hvr-bounce-to-right" placeholder="Send Message" value="Submit Message" />
                            </div>
                                    
                                </div>
                                
                                
                            </div>
                            
                            
                            
                        </form>
                            
                    </div>
                    
                
                </section>
                
                <!-- Side Bar -->
                <aside class="side-bar col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    
                    
                   
                    <!-- Contact Info -->
                    <div class="widget cont-info">
                        <div class="sec-title"><h3 class="skew-lines">company info</h3></div>
                        <div class="cont-box">
                            <div class="text" align="justify">Welcome to BT Auto Repair! We're here to keep your vehicle running smoothly. Have a question, concern, or simply want to schedule a service appointment? Reach out to us using the contact below:</div>
                            <ul class="info">
                                <li><strong>Email : </strong> <a href="mailto:btautorepairusa@gmail.com">btautorepairusa@gmail.com</a></li>
                                <li><strong>Whatsapp : </strong> <a href="tel:4107363906">410 736 3906</a></li>
                                <li><strong>Call : </strong> <a href="tel:4102543043">410 254 3043</a></li>
                             </ul>
                        </div>
                        
                    </div>
                
                
                </aside>
            
            </div>
        </div>
        
    </div>
    
    
    <!--Map Location-->   

<section class="map-locatiogn" id="map-locastion">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3084.249103380107!2d-76.56862429999999!3d39.34751599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c805e95f3b1333%3A0x66a78e0c68e9784!2s5000%20Harford%20Rd%2C%20Baltimore%2C%20MD%2021214%2C%20USA!5e0!3m2!1sen!2s!4v1647060480133!5m2!1sen!2s" width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

    
    <!--Main Footer-->
    @include('frontend.includes.footer')
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/googlemaps.js"></script>
<script src="js/script.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/569cfc09aeafd72017dd6ea9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google.com/maps/place/5000+Harford+Rd,+Baltimore,+MD+21214,+USA/@39.347516,-76.5686243,17z/data=!3m1!4b1!4m6!3m5!1s0x89c805e95f3b1333:0x66a78e0c68e9784!8m2!3d39.3475119!4d-76.5660494!16s%2Fg%2F11c43z__m4?entry=ttu');

  ga('create', 'UA-15521914-3', 'auto');
  ga('send', 'pageview');

</script>
<script>
function showAlert() {
    alert("Button clicked!");
}
</script>

</body>

</html>