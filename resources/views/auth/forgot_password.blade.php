@include('general_modul.frontend.includes.header_links')
<title>Forgot Password</title>
<body>
  <style type="text/css">
   .log_img{
    height: 450px; 
    padding: 130px;
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
  content: "\f070";
  font-family: "FontAwesome";
}

.eye-icon:hover:before {
  color: black;
}

.eye-icon.active:before {
  content: "\f06e";
}


</style>
<!------ header start ---->
@include('general_modul.frontend.includes.header')
<!----- header End -------->

<!-- Banner -->
<!--   <section>
   <div class="col-md-12 bgcolor">
     <a href="/" style="font-size: 15px; margin-left: 20px;" class="text-white"><b>Home</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
     <span style="font-size: 15px;" class="text-white"><b>/</b></span>&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="/login" style="font-size: 15px;" class="text-white"><b>Login</b></a>
   </div>
 </section> -->
 <!-- Banner End -->
 <!-- Login form area started -->
 <br>
 <div class="container-fluid">
  <div class="rows">

    <form method="POST" id="login" action="/forgot-password-email" >
      @csrf
      <div class="col-md-6 col-sm-12 text-center"> 
        <img src="/images/logo.png" class="log_img">          
      </div>
      <div class="col-md-6 col-sm-12">
       <div class="card" style="border-radius: 25px;">
         @include('general_modul.frontend.includes.success')
         <div class="card-body">
          <h5 class="card-title text-center" style="font-size: 25px; padding: 10px;">Reset Password</h5>

          <div class="col-md-12 col-sm-12">
            <div class="form-group">
             <label><b>Email</b></label>
             <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
         <p class="help-block text-danger">
              @error('email')
              {{$message}}
              @enderror
            </p>
           </div>
         </div>
      
     <div class="col-md-12">
       <button type="submit" class="btn btn-primary btn-block clrbtn">Reset Password</button>  
     </div>

     <!-- Register buttons -->
     <div class="text-center">
      <p>Remember Password? <a href="/login">Login</a></p>
      <!-- <p>or sign up with:</p>

      <a href="https://www.facebook.com/"><i class="fa fa-facebook-f" style="color: #3b5998;"></i></a>&nbsp;&nbsp;
      <a href="https://accounts.google.com/v3/signin/identifier?dsh=S-117022088%3A1672133337844639&elo=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AeAAQh4SAzeHEFzl_GN4q2gAlEixsmHNnUK-WwSJ610CoKLE5MMiqSrW5TxnBm0CNH4Lbw5zVj_3Gg"><i class="fa fa-google" style="color: #dd4b39;"></i></a>&nbsp;&nbsp;
      <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter" style="color: #55acee;"></i></a>&nbsp;&nbsp;
      <a href="https://github.com/login"><i class="fa fa-github " style="color: #333333;"></i></a>&nbsp;&nbsp; -->

    </div>
  </div>
</div>
</div>
</form>
</div>
</div>
<br>
<!-- Footer -->

@include('footer')


@include('general_modul.frontend.includes.footer_links')

<script type="text/javascript">
  $(".eye-icon").click(function() {
  $(this).toggleClass("active");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

</script>

</body>
</html>

