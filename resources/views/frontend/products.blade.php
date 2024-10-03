<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>OUR PRODUCTS | BT AUTO REPAIR</title>
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
                    <div class="page-title"><h1>Our Products</h1></div>
                    <div class="bread-crumb text-right">
                        <a href="/">Home</a>
                        <span class="current">Our Products</span>
                    </div>
                </div>
            </section>

            <!--Our Features Section-->
            <section class="features-section column-view">
              <div class="auto-container">
               <div class="sec-title">
                   <h3>Our Products</h3>
               </div>

               <!--Column Carousel-->
               <div class="column-carousel four-column clearfix">
                @foreach ($product as $data)
                <article class="column-box">
                	<div class="inner-box hvr-float-shadow">
                       <figure class="image">
                           <a href="/products/{{ $data->products_page_url }}"><img src="uploads/products/{{ $data->picture }}" alt="{{ $data->products }}" title="{{ $data->products }}"></a>
                           <figcaption class="price"><sup>$</sup>{{ $data->price }}</figcaption>
                       </figure>
                       <div class="post-content clearfix">
                        <a href="/products/{{ $data->products_page_url }}"><h3 class="skew-lines">{{ $data->products }}</h3></a>
                           <div class="text-center"><a href="#" class="theme-btn btn-style-one"><span class="fa fa-angle-right"></span> GET A QUOTE</a></div>
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