<!DOCTYPE html>
<html lang="en">
<head>
  @include('general_modul.frontend.includes.header_links')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Register</title>
  <body>
    <style type="text/css">
     
      /* Hide the increment and decrement buttons */
      input[type="number"]::-webkit-inner-spin-button,
      input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      input[type="number"] {
        -moz-appearance: textfield; /* Firefox */
      }

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

    /* Normal link color */
a.terms-link {
  color: blue;
  text-decoration: none;
}

/* Hover color */
a.terms-link:hover {
  color: #0066cc; /* Change to your preferred hover color */
}


  </style>
  <!------ header start ---->
  @include('general_modul.frontend.includes.header')
  <!----- header End -------->
  <!-- Banner --->
  <!-- <section>
   <div class="col-md-12 bgcolor">
     <a href="/" style="font-size: 15px; margin-left: 20px;" class="text-white"><b>Home</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
     <span style="font-size: 15px;" class="text-white"><b>/</b></span>&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="/register" style="font-size: 15px;" class="text-white"><b>register</b></a>
   </div>
 </section> -->
 <!-- Banner End --->
 <!--Register -->
 <br>
 <div class="container-fluid">
  <div class="rows">

    <form method="POST" role="form" id="quickForm" action="saveRegister" >
     
      @csrf
      <div class="col-md-6 col-sm-12 text-center"> 
        <img src="{{config('app.asset_url')}}/images/logo.png" class="log_img">          
      </div>
      <div class="col-md-6 col-sm-12">
       <div class="card" style="border-radius: 25px;">
        <div class="card-body">
         @include('general_modul.frontend.includes.success')
         <h5 class="card-title text-center" style="font-size: 25px; padding: 10px;">Sign Up to your account</h5>
         <div class="col-md-12 col-sm-12">
          <div class="form-group">
           <label><b>Full Name</b> <code>*</code></label>
           <input type="text" name="full_name" class="form-control" placeholder="Full Name" value="{{ old('full_name') }}" required>
           <p class="help-block text-danger">
            @error('full_name')
            {{$message}}
            @enderror
          </p>
        </div>
      </div>

      <div class="col-md-12 col-sm-12">
        <div class="form-group">
         <label><b>Mobile Number</b> <code>*</code></label>
         <input type="number" name="phone" class="form-control" placeholder="Mobile Number" value="{{ old('phone') }}" required>
         <p class="help-block text-danger">
          @error('phone')
          {{$message}}
          @enderror
        </p>
      </div>
    </div>

    <div class="col-md-12 col-sm-12">
      <div class="form-group">
       <label><b>Email</b> <code>*</code></label>
       <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
       <p class="help-block text-danger">
        @error('email')
        {{$message}}
        @enderror
      </p>
    </div>
  </div>

  <div class="col-md-12 col-sm-12">
    <div class="form-group">
     <label><b>Password</b> <code>*</code></label>
     <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="{{ old('password') }}" required>
     <span toggle="#password" class="eye-icon"></span>
     <p class="help-block text-danger">
      @error('password')
      {{$message}}
      @enderror
    </p>
  </div>
</div>

<div class="col-md-12 col-sm-12">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="terms" value="" id="form2Example31" checked required />
    <label class="form-check-label"><b>
      <a href="/terms" target="_blank" class="terms-link">I Agree to Terms & Conditions</a>
    </b></label>
  </div>
</div>

<div class="col-md-12 col-sm-12">
 <button type="submit" class="btn btn-primary btn-block clrbtn">Register</button>  
</div>

<div class="text-center" style="padding:10px;">
  <p>Already Registerd?&nbsp;<a href="{{config('app.general')}}/login">Login Here</a></p>
</div>

</div>
</div>
</div>
</form>
</div>
</div>
<br>
<!-- Card -->

<!-- Fullwidth Section -->

<!-- Footer -->

@include('footer')
@include('general_modul.frontend.includes.footer_links')


<script type="text/javascript">
  $(document).ready(function() {
    $(".eye-icon").click(function() {
      $(this).toggleClass("active");
      var input = $($(this).data("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
  });
</script>

</body>
</html>