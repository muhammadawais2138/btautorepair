    <header class="main-header">
      <div class="header-top">
        
        <div class="auto-container">
          <div class="row clearfix">
            <!--Logo-->
            <div class="col-md-3 col-sm-3 col-xs-12 logo"><a href="/"><img src="images/logo.png" alt="BtAutoRepair" title="Logo" style="height: 70px;"></a></div>
            
            <div class="col-lg-5 col-md-6 col-sm-10 header-top-infos pull-right">
              <ul class="clearfix">
                <li>
                  <div class="clearfix ">
                    <img src="images/icons/header-phone.png">
                    <p><b>Call Us Now</b> <br><a href="tel:4107363906" style="color: #000;">(410) 736 3906</a></p>
                  </div>
                </li>
                <li>
                  <div class="clearfix ">
                    <img src="images/icons/header-timer.png" style="color: #000;">
                    <p><b>Opening Hours</b> <br>Mon-Sat 8 AM-6 PM</p>
                  </div>
                </li>
              </ul>
            </div>
            
          </div>
        </div>
        
      </div>
      
      <!--Header Lower-->
      <div class="header-lower" >
        <div class="auto-container">
          <div class="row clearfix">
            <!--Main Menu-->
            <nav class="col-md-9 col-sm-12 col-xs-12 main-menu" >
              <div class="navbar-header">
                <!-- Toggle Button -->      
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              
              <div class="navbar-collapse collapse clearfix">                                                                                              
                <ul class="navigation">
                  <li class=""><a href="/">Home</a></li>
                  <li class=""><a href="/about">About</a></li>
                  <li class=""><a href="/services">Services</a></li>
                  <li class=""><a href="/brands">Brands</a></li>
                  <li><a href="/our_team">Our Team</a></li>
                  <li class=""><a href="/gallery">Gallery</a></li>
                  <li class=""><a href="/contact">Contact</a></li>
                  @if(auth()->check())
                  <li class=""><a href="/dashboard">Dashboard</a></li>
                  @else
                  <li class=""><a href="/login">Sign In</a></li>
                  @endif
                </ul>
              </div>
            </nav>
            <!--Main Menu End-->
            <!--Social Links-->
            <div class="col-md-3 col-sm-12 col-xs-12 social-outer">
              <div class="social-links text-right">
                <a href="#" class="fa fa-facebook-f"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-pinterest-p"></a>
                <a href="#" class="fa fa-whatsapp"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>