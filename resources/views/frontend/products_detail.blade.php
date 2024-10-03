@php

$url =  Request::segment(2);
$product = DB::select('SELECT * FROM products WHERE products_page_url = "'.$url.'"');

@endphp
<base href="/public">
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ $product[0]->products }} | BT AUTO REPAIR</title>
<link rel="shortcut icon" href="images/favicon.png">    <!-- Stylesheets -->
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
                    <div class="page-title"><h1>{{ $product[0]->products }}</h1></div>
                    <div class="bread-crumb text-right">
                        <span class="initial-text">you are here: </span>
                        <a href="/services">Product</a>
                        <span class="current">{{ $product[0]->products }}</span>
                    </div>
                </div>
            </section>

            <!-- Sidebar Page -->
            <div class="sidebar-page">
             <div class="auto-container">
                <div class="row clearfix">

                    <!-- Left Content -->
                    <section class="left-content col-lg-9 col-md-8 col-sm-7 col-xs-12">

                        <!-- Post -->
                        <article class="post post-detail">
                            <div class="post-image wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <img class="img-responsive" src="/uploads/products/{{ $product[0]->picture }}" onerror="this.src='/images/1.jpg'" alt="">
                                <div class="caption">
                                    <div class="date"><span class="day">18</span><span class="month">Jan</span></div>

                                </div>
                            </div>
                            <div class="content-box">
                                <h2 class="post-title"><a href="#">{{ $product[0]->products }}</a></h2>
                                <div class="post-info">Posted on {{ \Carbon\Carbon::parse($product[0]->created_at)->format('d M')}}</div>
                                <div class="post-data">
                                 <p>@php echo $product[0]->details @endphp</p>
                             </div>

                             <div class="share-post wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="social-links">
                                    <strong>Share This Post</strong>
                                    <a href="#" class="fa fa-facebook-f"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                                    <a href="#" class="fa fa-google"></a>
                                    <a href="#" class="fa fa-pinterest-p"></a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </article>
                    


                </section>
                
                <!-- Side Bar -->
                <aside class="side-bar col-lg-3 col-md-4 col-sm-5 col-xs-12">


                    <!-- Search Form -->
                    <div class="widget search-form">

                        <form method="post" action="https://world5.commonsupport.com/html/carshire/blog.html">
                        	<div class="form-group">
                                <input type="search" name="search" value="" placeholder="search for something">
                                <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                            </div>
                        </form>
                        
                    </div>
                    

                    
                    <!-- Latest Posts -->
                    <div class="widget latest-posts">
                    	<div class="sec-title"><h3>Latest Product</h3></div>
                     @foreach ($pro as $data)
                     <div class="post">
                       <div class="post-thumb"><a href="/products/{{ $data->products_page_url }}"><img src="uploads/products/{{ $data->picture }}" alt=""></a></div>
                       <h4><a href="/products/{{ $data->products_page_url }}">{{ $data->products }}</a></h4>
                       <div class="post-info"><a href="#">{{ \Carbon\Carbon::parse($data->created_at)->format('d M')}}</a>&nbsp;</div>
                   </div>
                   
                   @endforeach
               </div>


           </aside>

       </div>
   </div>
</div>


<!--Contact Options-->
<section class="contact-options">
   <div class="clearfix">
     <ul class="info-box clearfix wow bounceInRight">
         <li><a href="/contact"><span class="fa fa-calendar"></span> Make an appointment</a></li>
         <li><a href="/contact"><span class="fa fa-phone"></span> Contact Us</a> </li>
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

<!-- Mirrored from world5.commonsupport.com/html/carshire/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 07:28:09 GMT -->
</html>