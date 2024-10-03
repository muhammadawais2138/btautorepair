<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SIGN IN | BT AUTO REPAIR</title>
<link rel="shortcut icon" href="images/favicon.png">

 <!--favicon icon-->
 <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
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
  <style type="text/css">
  body {
    font-family: 'Poppins', sans-serif;
  }

  h1 {
    font-size: 40px;
    background-image: linear-gradient(43deg, #02002b 0%, red 46%, #FFCC70 100%);
    -webkit-background-clip: text;
    color: transparent;
  }

  .log_img {
    width: 100%;
    height: 400px;
    object-fit: contain; 
    padding: 70px;
  }

  @media (max-width: 767px) {
    .log_img {
      padding: 5px 40px;
      height: 150px; 
    }
  }

  .eye-icon {
    position: relative;
    float: right;
    margin-top: -55px;
    margin-right: 10px;
    cursor: pointer;
    color: #aaa;
    font-size: 18px;
    z-index: 1;
  }

  .eye-icon:before {
    content: "\f06e";
    font-family: "Font Awesome 5 Free";
  }

  .eye-icon.active:before {
    content: "\f070";
  }

  button {
    padding: 5px 50px;
    border-radius: 50px; 
    background-color: #02002b; 
    text-decoration: none;
    color: white;
    border: none;
    cursor: pointer;
  }

  button:hover {
    background-color: #fb4848;
  }

  .card {
    border: 1px solid #010028;
box-shadow: 0;
    border-radius: 15px;
  }

  .card-title {
    font-size: 25px;
    padding: 10px;
    text-align: center;
    color: black;
  }

  .form-group {
    margin-bottom: 20px;
  }

  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  input[type="email"]:focus,
  input[type="password"]:focus {
    border-color: #fb4848;
    outline: none;
  }

  .text-center {
    text-align: center;
  }

  .container {
    margin-top: 10px;
  }

</style>
<!------ header start ---->
 @include('frontend.includes.header')
<!----- header End -------->
<!-- Login form area started -->
<section class="service-single">
  <div class="container">
    <p></p>
    <div class="row">
      <div class="col-lg-6 mt-lg-0" align="center">
        <div id="secondary" class="sidebar widget-area">
          <img src="images/logo.png" class="log_img">    
        </div>
      </div>
      <div class="col-lg-6 mt-lg-0">
        <div class="card" style="">
          <div class="card-body">
            <form method="POST" id="login" action="/postlogin">
              @csrf
              <div class="card" style="padding: 20px; ">
                @include('frontend.includes.success')
                <div class="card-body">
                  <h5 class="card-title"><b>Welcome Back</b><br>Please Sign in Account</h5>
                  <div class="form-group">
                    <label><b>Email</b></label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <label><b>Password</b></label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="text-center">
                    <button type="submit">Sign in</button>  
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Footer -->

@include('frontend.includes.footer')

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
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

