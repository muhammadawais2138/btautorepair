<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>OUR TEAM | BT AUTO REPAIR</title>
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
            <div class="page-title"><h1>Meet Our Team</h1></div>
            <div class="bread-crumb text-right">
                <span class="initial-text">you are here: </span>
                <a href="about.html">About Us</a>
                <span class="current">Our Team</span>
            </div>
        </div>
	</section>

	<!--Filter Section-->
    <section class="filter-section no-padd-bottom">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<div class="col-md-12 col-sm-12 col-xs-12">
                	<div class="sec-title"><h3 style="font-weight: bold;">MEET OUT TEAM</h3></div>
                </div>
                <!-- <div class="col-md-9 col-sm-12 col-xs-12 filter-box">
                	<ul class="filter-tabs clearfix">
                        <li class="filter" data-role="button" data-filter="all">all</li>
                        <li class="filter" data-role="button" data-filter="sales">sales</li>
                        <li class="filter" data-role="button" data-filter="clean">clean</li>
                        <li class="filter" data-role="button" data-filter="repair">repair</li>
                        <li class="filter" data-role="button" data-filter="engine">engine</li>
                        <li class="filter" data-role="button" data-filter="mechanic">mechanic</li>
                    </ul>
                </div> -->
            </div>
            
            <div class="filter-list column-view row clearfix">
            	@foreach ($team as $data)
                <article class="col-md-3 col-sm-6 col-xs-12 column-box team-box mix mix_all clean engine repair">
                	<div class="inner-box hvr-float-shadow">
                    	<figure class="image">
                        	<img src="/uploads/team/{{ $data->picture }}" alt="{{ $data->name }}" title="{{ $data->name }}" style="height: 230px;">
                            <div class="social-links">
                            	<div class="plus-btn"></div>
                                <ul class="links">
                                	<li><a href="#" class="fa fa-facebook-f"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="post-content text-center clearfix">
                        	<h3>{{ $data->name }}</h3>
                            <h5 class="occupation">{{ $data->designation }}</h5>
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
<script src="js/jquery.mixitup.min.js"></script>
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
