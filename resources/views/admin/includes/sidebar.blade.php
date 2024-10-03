<style type="text/css">

  .bg1 {
    background-image: linear-gradient( #d1292b 46%, #FFCC70 100%);
    -webkit-background-clip: text;
    color: transparent;
    background-color: #010125;

  }

  .bg2 {

    background-color: #010125;

  }

  .bz {
  background-image: linear-gradient(43deg, white 50%, #d1292b 46%);
  -webkit-background-clip: text;
  color: transparent;
  background-color: #010125;
}


  p{
    color: white;
  }
  p:hover {
    background-color: #fb4848;
    -webkit-background-clip: text;
    color: transparent;
  }

 hr {
  border: none; /* Remove the default border */
  height: 3px; /* Set the height */
  background-image: linear-gradient(43deg, #02002b 0%, #d1292b 46%, #FFCC70 100%);
  border-radius: 10px; /* Apply border radius */
}


</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar bg2 elevation-4 myaside">
  <!-- Brand Logo -->
  <a href="/dashboard" class="brand-link myaside">
    <img src="images/sidebarlogo.png" alt="Logo" class="brand-image">
<!--     <span class="brand-text bg1 font-weight-light"><strong>BTAuto</strong></span> -->
  </a>
  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="/dashboard" class="nav-link {{request()->segment(1)=='dashboard' ? 'myactive' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt bz"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <hr>
          </li>
          
          <li class="nav-item">
            <a href="/add_services" class="nav-link {{request()->segment(1)=='add_services' ? 'myactive' : ''}}">
             <i class="nav-icon fa fa-building bz"></i>
             <p>Services</p>
           </a>
         </li>

         <li class="nav-item">
          <hr>
        </li>

        <!-- <li class="nav-item">
          <a href="/add_products" class="nav-link {{request()->segment(1)=='add_products' ? 'myactive' : ''}}">
           <i class="nav-icon fa fa-american-sign-language-interpreting bz"></i>
           <p>Products</p>
         </a>
       </li>

       <li class="nav-item">
        <hr>
      </li> -->

      <li class="nav-item">
        <a href="/add_team" class="nav-link {{request()->segment(1)=='add_team' ? 'myactive' : ''}}">
         <i class="nav-icon fa fa-users bz"></i>
         <p>Team</p>
       </a>
     </li>

     <li class="nav-item">
      <hr>
    </li>

    <li class="nav-item">
      <a href="/add_gallery" class="nav-link {{request()->segment(1)=='add_gallery' ? 'myactive' : ''}}">
       <i class="nav-icon fab fa-bandcamp bz"></i>
       <p>Gallery</p>
     </a>
   </li>

   <li class="nav-item">
    <hr>
  </li>

   <li class="nav-item">
      <a href="/add_brands" class="nav-link {{request()->segment(1)=='add_brands' ? 'myactive' : ''}}">
       <i class="nav-icon fa fa-car bz"></i>
       <p>Brands</p>
     </a>
   </li>
  <li class="nav-item">
    <hr>
  </li>
    <li class="nav-item">
      <a href="/add_invoice" class="nav-link {{request()->segment(1)=='add_invoice' ? 'myactive' : ''}}">
       <i class="nav-icon fa fa-file bz"></i>
       <p>Add Invoice</p>
     </a>
   </li>

   <li class="nav-item">
    <hr>
  </li>

   <!--     
       <li class="nav-item">
        <a href="/add_blog" class="nav-link {{request()->segment(1)=='add_blog' ? 'myactive' : ''}}">
         <i class="nav-icon fab fa-blogger"></i>
         <p>Blog</p>
       </a>
     </li>  -->

   </nav>
   <!-- /.sidebar-menu -->
 </div>
 <!-- /.sidebar -->

 <!-- Sidebar -->
 <div class="sidebar">

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <!-- <li class="nav-item">
            <a href="/dashboard" class="nav-link {{request()->segment(1)=='dashboard' ? 'myactive' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>   -->       
          

          <li class="nav-item">
            <a href="/user_profile/" class="nav-link {{request()->segment(1)=='user_profile' ? 'myactive' : ''}}">
             <i class="nav-icon fa fa-user"></i>
             <p>Profile</p>
           </a>
         </li>

         <li class="nav-item">
          <a href="/logout" class="nav-link {{request()->segment(1)=='logout' ? 'myactive' : ''}}">
           <i class="nav-icon fas fa-sign-out-alt"></i>
           <p>Logout</p>
         </a>
       </li>
       
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
   
   <!-- Sidebar -->
   <div class="sidebar">

   </div>
   <!-- /.sidebar -->


 </aside> 