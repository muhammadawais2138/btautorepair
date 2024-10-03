  <!DOCTYPE html>
  <html lang="en">
  @section('title')
  Blogs
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
         <h1 class="m-0">Blogs</h1>
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Add Blogs</li>
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
                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">
                  <i class="fa fa-list">&nbsp;&nbsp;</i>Blogs Listing
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">
                  <i class="fa fa-plus"></i>&nbsp;&nbsp; Add Blogs
                </a>
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
                    <th>Blogs</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                 
                 <tr>
                  <td></td>
                  <td> <img src="uploads/blog/" style="width: 100px; height: 70px; border-radius: 5px; object-fit: contain;"></td>
                  <td>
                    <a href="/blogs_details/" target="_blank"><b></b></a>
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
              <div class="tab-pane" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                @include('frontend.includes.success')
               <form name="CarFrom" action="/save_blog" method="POST" enctype="multipart/form-data">   
         @csrf
         <div class="col-md-12">
          <div class="container-fluid">
           <div class="row">

            <div class="col-md-12">
              <div class="row">

                <div class="col-md-12">
                 <div class="card">



                  <div class="card-body">
                   <div class="row">

                    <div class="col-md-6">
                     <div class="form-group">
                       <label for="exampleInputBorder">Blog Title<code>*</code></label>
                       <input type="text" name="title" placeholder="Services" class="form-control" required>
                       <p class="help-block text-danger">
                        @error('title')
                        {{$message}}
                        @enderror
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6">
                   <div class="form-group">
                    <label for="exampleInputBorder">Picture<code>*</code></label> <small style="font-size: 8px;"> Type : jpg, jpeg, png, gif, size : 2048</small>
                    <input type="file" name="picture" class="form-control" required>
                    <p class="help-block text-danger">
                      @error('picture')
                      {{$message}}
                      @enderror
                    </p>
                  </div>
                </div>

               <div class="col-md-12">
         <div class="form-group">
          <label for="exampleInputBorder">Details<code>*</code> <small>500 characters maximum</small></label>
         <textarea class="form-control" name="details" rows="4" placeholder="Details"></textarea>
          <p class="help-block text-danger">
            @error('details')
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

    <div class="col-md-12">
     <div class="card">


      <div class="card-body">
       <div class="row">

         <div class="col-md-6">
         <div class="form-group">
          <label for="exampleInputBorder">Page Title<code>*</code> <small>500 characters maximum</small></label>
          <input type="text" name="page_title" class="form-control" id="exampleInputBorder" placeholder="Page Title" required>
          <p class="help-block text-danger">
            @error('page_title')
            {{$message}}
            @enderror
          </p>
        </div>
      </div>

        <div class="col-md-6">
         <div class="form-group">
          <label for="exampleInputBorder">Keywords<code>*</code> <small>500 characters maximum</small></label>
          <input type="text" name="page_keywords" class="form-control" id="exampleInputBorder" placeholder="Keywords" required>
          <p class="help-block text-danger">
            @error('page_keywords')
            {{$message}}
            @enderror
          </p>
        </div>
      </div>


      <div class="col-md-12">
       <div class="form-group">
        <label for="exampleInputBorder">Meta Description<code>*</code> <small> 1,000 characters maximum</small> </label>
        <textarea class="form-control" name="page_description" rows="4" placeholder="Meta Description"></textarea>
        <p class="help-block text-danger">
          @error('page_description')
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
<!-- /.card-body -->
<div class="card-footer text-center">
  <a href="/dashboard" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;&nbsp;
  <button type="submit" class="btn btn-primary">Add Blogs</button>
</div>
</form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-6">
        <!-- Your right column content goes here -->
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
<style>
  .images-preview-div img
  {
    padding: 10px;
    max-width: 100px;
  }

  .myDiv{
   display:none;
 }

 .myDiv5{
   display:none;
 }

</style>
