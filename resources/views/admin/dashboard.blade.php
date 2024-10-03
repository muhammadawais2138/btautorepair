<style type="text/css">

  .bg {
    background-image: linear-gradient(43deg, #02002b 50%, red 46%, #FFCC70 100%);
    -webkit-background-clip: text;
    color: transparent;
    background-color: #010125;

  }


</style>
<!DOCTYPE html>
<html lang="en">
@section('title')
Dashboard
@endsection
<!-- Start top links -->
@include('admin.includes.headlinks')
<!-- end top links -->
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
 <div class="wrapper">
  <!-- Start navbar -->
  @include('admin.includes.navbar')
  <!-- end navbar -->

  <!-- Start Sidebar -->
  @include('admin.includes.sidebar')
  <!-- end Sidebar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
      <div class="col-sm-6">
       <h1 class="m-0">Dashboard</h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
    
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg elevation-1"><i class="fa fa-building"></i></span>

      <div class="info-box-content bg">
           @php
                   $total_services = DB::select("SELECT COUNT(service_id) services FROM services ");
                   @endphp
          <span class="info-box-text bg">Total Services</span>
          <span class="info-box-number bg">{{number_format($total_services[0]->services)}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

     <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg elevation-1"><i class="fa fa-american-sign-language-interpreting"></i></span>

         <div class="info-box-content bg">
           @php
                  $total_products = DB::select("SELECT COUNT(product_id) products FROM products ");
                   @endphp
          <span class="info-box-text bg">Products</span>
          <span class="info-box-number bg">{{number_format($total_products[0]->products)}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg elevation-1"><i class="fa fa-users"></i></span>

         <div class="info-box-content bg">
           @php
                    $total_team = DB::select("SELECT COUNT(team_id) team FROM team");
                   @endphp
          <span class="info-box-text bg">Team</span>
          <span class="info-box-number bg">{{number_format($total_team[0]->team)}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg elevation-1"><i class="fab fa-bandcamp"></i></span>

        <div class="info-box-content bg">
           @php
                    $total_gallery = DB::select("SELECT COUNT(gallery_id) gallery FROM gallery");
                   @endphp
          <span class="info-box-text bg">Gallery</span>
          <span class="info-box-number bg">{{number_format($total_gallery[0]->gallery)}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->


<!--     <div class="col-md-8">

     

<div class="card">
  <div class="card-header bg-light border-transparent">
    <h3 class="card-title">Latest Blogs</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>

  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table m-0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          
          
          <tr>
            <td></td>
            <td>
              <a target="_blank" href="/blogs_details/"></a>
            </td>
            
            <td>
            
           </td>
         </tr>
         
          
          
        </tbody>
      </table>
    </div>

  </div>

  <div class="card-footer clearfix">
    <a href="add_blog" class="btn btn-sm btn-info float-left">Place New Blogs</a>
    <a href="car_listing" class="btn btn-sm btn-secondary float-right">View All Blogs</a>
  </div>

</div>


</div> -->
<!-- /.col -->



<!-- <div class="col-md-4">



  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Live Traffic</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>

    <div class="card-footer p-0">
      <ul class="nav nav-pills flex-column">                  

        <li class="nav-item" style="width:100%;">
          <script type="text/javascript" src="//cdn.livetrafficfeed.com/static/v5/live.js?bc=ffffff&tc=000000&brd1=2853a8&lnk=135d9e&hc=ffffff&hfc=2853a8&nc=19ff19&vv=400&tft=10&ro=0&tz=Asia%2FDubai&res=1"></script>
        </li>
       
      </ul>
    </div>

  </div>


</div>
 -->
<!-- admin close here -->

</div>
</div>
</section>

<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
 <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!------ Start Footer -->
@include('admin.includes.version')
<!------ end Footer -->

</div>
<!-- ./wrapper -->
<!------ Start Footer links-->
@include('admin.includes.footer_links')
<!------ end Footer links -->

</body>
</html>
