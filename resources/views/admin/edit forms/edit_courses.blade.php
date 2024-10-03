<base href="/public">
<!DOCTYPE html>
<html lang="en">
@section('title')
Edit Courses
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
       <h1 class="m-0"> Edit Courses</h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"> Edit Courses
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
        <a class="nav-link active" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Edit Courses</a>
      </li>
</ul>
</div>
  <div class="card-body">
   <div class="tab-content" id="custom-tabs-four-tabContent">
    
<div class="tab-pane fade show active" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
  @include('frontend.includes.success')
               <form name="CarFrom" action="/update_courses" method="POST" enctype="multipart/form-data">   
         @csrf
         <div class="col-md-12">
          <div class="container-fluid">
           <div class="row">
             <input type="hidden" name="course_id"  value="@php echo $course[0]['course_id'] @endphp">
            <div class="col-md-12">
              <div class="row">

                <div class="col-md-12">
                 <div class="card">



                  <div class="card-body">
                   <div class="row">

                    <div class="col-md-6">
                     <div class="form-group">
                       <label for="exampleInputBorder">Course Name<code>*</code></label>
                       <input type="text" name="course" placeholder="Course Name" class="form-control" value="@php echo $course[0]['course'] @endphp" required>
                       <p class="help-block text-danger">
                        @error('course')
                        {{$message}}
                        @enderror
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                       <label for="exampleInputBorder">Course Duration<code>*</code></label>
                       <input type="text" name="duration" placeholder="Course Duration" value="@php echo $course[0]['duration'] @endphp" class="form-control" required>
                       <p class="help-block text-danger">
                        @error('duration')
                        {{$message}}
                        @enderror
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                       <label for="exampleInputBorder">Course Fee<code>*</code></label>
                       <input type="text" name="fee" placeholder="Course Fee" value="@php echo $course[0]['fee'] @endphp" class="form-control" required>
                       <p class="help-block text-danger">
                        @error('fee')
                        {{$message}}
                        @enderror
                      </p>
                    </div>
                  </div>

                  <div class="col-md-1">
      <img src="/uploads/course/@php echo $course[0]['picture'] @endphp" style="width: 70px; height: 70px; border-radius: 5px;"></td>
    </div>

                  <div class="col-md-5">
                   <div class="form-group">
                    <label for="exampleInputBorder">Picture<code>*</code></label><small style="font-size: 8px;"> Type : jpg, jpeg, png, gif, size : 2048</small>
                    <input type="file" name="picture" class="form-control" value="@php echo $course[0]['picture'] @endphp">
                    <input type="hidden" name="hidden_pic" class="form-control" value="@php echo $course[0]['picture'] @endphp">
                    
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
         <textarea class="form-control" name="details" rows="4" placeholder="Details">@php echo $course[0]['details'] @endphp</textarea>
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
          <input type="text" name="page_title" class="form-control" id="exampleInputBorder" placeholder="Page Title" value="@php echo $course[0]['page_title'] @endphp" required>
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
          <input type="text" name="page_keywords" class="form-control" id="exampleInputBorder" value="@php echo $course[0]['page_keywords'] @endphp" placeholder="Keywords" required>
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
        <textarea class="form-control" name="page_description" rows="4" placeholder="Meta Description">@php echo $course[0]['page_description'] @endphp</textarea>
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
  <button type="submit" class="btn btn-primary">Update Courses</button>
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
