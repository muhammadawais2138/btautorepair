<style type="text/css">
.brand_hover:hover h2,
.brand_hover:hover h5 {
  color: red;
}

.brand-box {
  width: 150px;
  height: 150px;
  object-fit: contain;
  border-radius: 5px;
  border: 2px solid #010028; /* Update border color */
  padding: 8px;
  box-shadow: 1px 1px 1px 1px;
}

</style>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Brands | BT AUTO REPAIR</title>
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
                    <div class="page-title"><h1>Brands</h1></div>
                    <div class="bread-crumb text-right">
                        <a href="/">Home</a>
                        <span class="current">Brands</span>
                    </div>
                </div>
            </section>

            <!--Our Features Section-->
            <section class="features-section column-view">
              <div class="auto-container">
               <div class="sec-title">
                   <h3>Brands</h3>
               </div>

              
              <div class="row">
   @foreach ($brand as $data)
    <div class="col-md-2 col-sm-6 col-xs-6 brand_hover" align="center" style="">
      <div class="search">
        <a href="/sell-car-rentals/car-brand/">

          <img src="uploads/brands/{{ $data->logo }}" onerror="this.src='/uploads/profile/avatar2.png'" alt="{{ $data->brand_name }}" class="rounded brand-box">        
         <h2 style="font-size:20px;" align="center">{{ $data->brand_name }}</h2> 
       </a>
     </div>
   </div>
 @endforeach

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
