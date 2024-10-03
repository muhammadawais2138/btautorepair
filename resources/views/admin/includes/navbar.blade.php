<style type="text/css">
  .bt {

    background-color: #010125;

  }
   .a{
    color: white;
  }
  .a:hover {
    background-color: #fb4848;
    -webkit-background-clip: text;
    color: transparent;
  }
  .ba {
  background-image: linear-gradient( red 46%, #FFCC70 100%);
    -webkit-background-clip: text;
    color: transparent;
    background-color: #010125;
}

</style>

@php
$user = Auth::user();
@endphp
<!-- Preloader -->
<!-- <div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__wobble" src="images/logo.png" height="220" width="350" style="object-fit: contain;">
</div> -->



<!-- Navbar -->
<nav class="main-header navbar navbar-expand bt mynav">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
     <li class="nav-item">
      <a class="nav-link a" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    
    <li class="nav-item ">
      <a href="/" class="nav-link  a">
       <i class="fa fa-home ba"></i> Home
     </a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    <!-- Messages Dropdown Menu -->
   
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link text-light" data-toggle="dropdown" href="#">
        
        <img style="width: 30px; height: 30px" src="/uploads/profile/{{ $user->pic??'' }}" class="img-circle" alt="Photo">
        &nbsp;&nbsp;
        <strong class="ba">{{$user['name'] }}</strong>&nbsp;&nbsp;
        <i class="fa fa-angle-down"></i>&nbsp;&nbsp;        
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header"><strong><br>{{$user['name'] }}
          </strong></span>
        <div class="dropdown-divider"></div>
        <a href="/user_profile/{{$user['id'] }}" class="dropdown-item">
          <i class="fa fa-user mr-2"></i> My Profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="/logout" class="dropdown-item">
          <i class="fas fa-sign-out-alt mr-2"></i> Sign Out
        </a>
        
      </div>
    </li>
    
  </ul>
</nav>
  <!-- /.navbar -->

