<!DOCTYPE html>
<html lang="en">
@section('title')
Blog Listing
@endsection
<!-- Start top links -->
@include('admin.includes.headlinks')
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
       <h1 class="m-0">Blog Listing</h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Blog Listing
                <!-- $user = auth()->user();
                 print_r($user);  -->
               </li>
             </ol>
           </div><!-- /.col -->
         </div><!-- /.row -->
       </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->
     <section class="content">
       <div class="container-fluid">
        <div class="row">
         <!-- left column -->
         <div class="col-md-12">
          <div class="card card-primary card-outline card-outline-tabs">
           <div class="card-header p-0 border-bottom-0">

            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
             <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true"><i class="fa fa-list">&nbsp;&nbsp;</i>Blog Listing</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
         <div class="tab-content" id="custom-tabs-four-tabContent">
           <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
            @include('frontend.includes.success')
            <div class="card card-primary">
             <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                   <th>Pic</th>
                  <th>Title</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
              
               <tr>
                <td></td>
                <td> <img src="" style="width: 200px; height: 100px; border-radius: 5px; object-fit: contain;"></td>
                <td>
                  <a href="" target="_blank"><b></b></a>
                  <br>
                 
                  <br>
                  <a href="" target="_blank"><b>Click For Data</b></a>
                </td>
                <td>
                  <b></b>
                </td>

        <td>

         <div class="btn-group" role="group">
          <!-- <a href="" class="btn btn-warning btn-xs" title="View"> <i class="fa fa-eye"></i></a>&nbsp;&nbsp; -->
          <a target="_blank" href="" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
          <a onclick="return confirm('Are you sure to Delete?');" href="" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash"></i></a>
        </div>
      </td>
    </tr>

    
  </tbody>




</table>


</div>
</div>
</div>

</div>
</div>
<!-- /.card -->


</div>
<!--/.col (left) -->
<!-- right column -->
<div class="col-md-6">

</div>
<!--/.col (right) -->
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
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
