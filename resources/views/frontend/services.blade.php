<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>OUR SERVICES | BT AUTO REPAIR</title>
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
            <div class="page-title"><h1>Our Services</h1></div>
            <div class="bread-crumb text-right">
                <span class="initial-text">you are here: </span>
                <a href="about.html">About Us</a>
                <span class="current">Our Services</span>
            </div>
        </div>
	</section>
	
    <!--Our Features Section-->
    <section class="featured-services column-view">
        <div class="auto-container">
            
            <div class="sec-title">
                <h3 style="font-weight: bold;">Our Services</h3>
            </div>
                        
            <div class="row clearfix">
                @foreach ($services as $data)
                <article class="col-md-4 col-sm-6 col-xs-12 column-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="inner-box">
                        <figure class="image">
                            <a href="#"><img src="uploads/services/{{ $data->picture }}" alt="{{ $data->services }}" title="{{ $data->services }}" style="height: 250px;"></a>
                            <!-- <figcaption class="price"><sup>$</sup>{{ $data->price }}</figcaption> -->
                        </figure>
                        <div class="post-content clearfix">
                            <h3 class="skew-lines">{{ $data->services }}</h3>
                            <div class="text-center"><a href="/service/{{ $data->services_page_url }}" class="theme-btn dark-btn">Read More</a></div>
                        </div>
                        
                        <div class="overlay-box">
                            <a href="/service/{{ $data->services_page_url }}" style="color: #fff;"><h3 class="skew-lines">{{ $data->services }}</h3></a>
                             <a href="/service/{{ $data->services_page_url }}">
                            <div class="text" style="color: #fff;">
                                <p>@php echo  $data->details @endphp</p>
                                
                            </div>
                        </a>
                        </div>
                        
                    </div>
                </article>
                 @endforeach
            </div>
            
        </div>    
    </section>
    
    <!--Contact Options-->
    <section class="contact-options">
    	<div class="clearfix">
        	<ul class="info-box clearfix wow bounceInRight">
            	<li><a href="contact.html"><span class="fa fa-calendar"></span> Make an appointment</a></li>
                <li><a href="contact.html"><span class="fa fa-phone"></span> Contact Us</a> </li>
            </ul>
        </div>
    </section>
    
    <!--Main Footer-->
    @include('frontend.includes.footer')
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/wow.js"></script>
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
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15521914-3', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>
