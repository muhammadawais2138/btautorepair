<base href="/public">
<!DOCTYPE html>
<html lang="en">
@section('title')
Edit Brands
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
       <h1 class="m-0"> Edit Brands</h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"> Edit Brands
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
      
      <li class="nav-item ">
        <a class="nav-link active" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false"><i class="fa fa-building"></i>&nbsp;&nbsp;Edit Brands</a>
      </li>
</ul>
</div>
  <div class="card-body">
   <div class="tab-content" id="custom-tabs-four-tabContent">
    
<div class="tab-pane fade show active" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
  @include('frontend.includes.success')
               <form name="CarFrom" action="/update_brands" method="POST" enctype="multipart/form-data">   
         @csrf
         <div class="col-md-12">
          <div class="container-fluid">
           <div class="row">

            <input type="hidden" name="brand_id"  value="@php echo $brand[0]['brand_id'] @endphp">

            <div class="col-md-12">
              <div class="row">

                <div class="col-md-12">
                 <div class="card">

                   <div class="card-body">
                   <div class="row">

                    <div class="col-md-6">
                     <div class="form-group">
                       <label for="exampleInputBorder">Brands Name<code>*</code></label>
                       <input type="text" name="brand_name" placeholder="Brands Name" class="form-control" value="@php echo $brand[0]['brand_name'] @endphp" required="">
                       <p class="help-block text-danger">
                        @error('brand_name')
                        {{$message}}
                        @enderror
                      </p>
                    </div>
                  </div>

                  <div class="col-md-1">
      <img src="/uploads/brands/@php echo $brand[0]['logo'] @endphp" style="width: 70px; height: 70px; border-radius: 5px;"></td>
    </div>

                  <div class="col-md-5">
                   <div class="form-group">
                    <label for="exampleInputBorder">Logo<code>*</code></label> <small style="font-size: 8px;"> Type : jpg, jpeg, png, gif, size : 2048</small>
                    <input type="file" name="logo" class="form-control" value="@php echo $brand[0]['logo'] @endphp">
                    <input type="hidden" name="hidden_pic" class="form-control" value="@php echo $brand[0]['logo'] @endphp">
                    <p class="help-block text-danger">
                      @error('logo')
                      {{$message}}
                      @enderror
                    </p>
                  </div>
                </div>
 </div>
            </div>
          </div>
        </div>

      </div>
    </div>

   

</div>
<!-- /.card-body -->
<div class="card-footer text-center">
  <a href="/dashboard" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;&nbsp;
  <button type="submit" class="btn btn-primary">Update Brands</button>
</div>
</form>
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
</div>
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

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
