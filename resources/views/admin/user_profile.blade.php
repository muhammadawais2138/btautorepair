<base href="/public">
<!DOCTYPE html>
<html lang="en">
@section('title')
User Profile
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
       <h1 class="m-0">User Profile</h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">User Profile
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
     <div class="col-md-12">
      @include('frontend.includes.success') 
    </div>
    <div class="col-md-3">

     <!-- Profile Image -->
     <div class="card card-primary card-outline">
      <div class="card-body box-profile">
       <div class="text-center">
        @php if($user[0]['pic']==''){@endphp
        <img class="profile-user-img img-fluid img-circle"
        src="/images/logo .png"
        alt="User Profile Picture" style="width: 100px; height: 100px;">
          @php } @endphp
        @php if($user[0]['pic']!=''){@endphp
        <img class="profile-user-img img-fluid img-circle"
        src="/uploads/profile/{{ $user[0]['pic'] }}"
        alt="User Profile Picture" style="width: 100px; height: 100px;">
        @php } @endphp
        
      </div>

      <h3 class="profile-username text-center">
        {{$user[0]['name'] }}
    </h3>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</div>
<!-- /.col -->
<div class="col-md-9">
 <div class="card">
  <div class="card-header p-2">
   <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"><i class="fa fa-eye"></i>&nbsp;Overview</a></li>
    <li class="nav-item"><a class="nav-link" href="#edit_profile" data-toggle="tab"><i class="fa fa-edit"></i>&nbsp;Edit Profile</a></li>
    <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab"><i class="fa fa-lock"></i>&nbsp;Change Password</a></li>
  </ul>
</div><!-- /.card-header -->
<div class="card-body">
 <div class="tab-content">
  <div class="active tab-pane" id="activity">
   <!-- Post -->
   <div class="post">
    <h3 class="profile-username">Person Detail</h3>
    <p>
    @php echo $user[0]['person_detail'] @endphp
   </p>

 </div>
 <!-- /.post -->

 <!-- Post -->
 <div class="post">
  <h3>Profile Details</h3>
  <!-- /.user-block -->
  <div class="row mb-3">

   <!-- /.col -->
   <div class="col-sm-6">

     <div class="row">
      <div class="col-lg-4 col-md-4 des"><b>Full Name</b></div>
      <div class="col-lg-8 col-md-8 par">{{$user[0]['name'] }}</div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-4 des"><b>Email</b></div>
      <div class="col-lg-8 col-md-8 par">{{$user[0]['email'] }}</div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-4 des"><b>Phone</b></div>
      <div class="col-lg-8 col-md-8 par">{{$user[0]['phone'] }}</div>
    </div>

    
     

    

    <!-- /.row -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

</div>
<!-- /.post -->
</div>
<!-- /.tab-pane -->


<div class="tab-pane" id="edit_profile">
<form name="ProfileForm" action="/update_profile" method="POST" enctype="multipart/form-data" class="form-horizontal">
 
  @csrf
  <input type="hidden" name="id" value="{{$user[0]['id'] }}">

<div class="row mb-2">
   <div class="mb-4 col-md-12 bg-light"><label><i class="fa fa-user"></i>&nbsp;User Details</label></div>
  <div class="col-md-6">
     <label for="inputName">Full Name</label>
      <input type="text" name="name" class="form-control" id="inputName" placeholder="Full Name" value="{{$user[0]['name'] }}">
       <p class="help-block text-danger">
              @error('name')
              {{$message}}
              @enderror
            </p>
  </div>

  <div class="col-md-6">
     <label for="inputName">Phone</label>
     <input type="number" name="phone" class="form-control" id="inputName" placeholder="Phone" value="{{$user[0]['phone'] }}">
     <p class="help-block text-danger">
              @error('phone')
              {{$message}}
              @enderror
            </p>
  </div>

  <div class="col-md-6">
     <label for="inputName">Email</label>
     <input type="email" name="email" class="form-control" id="inputName" placeholder="Email" value="{{$user[0]['email'] }}">
     <p class="help-block text-danger">
              @error('email')
              {{$message}}
              @enderror
            </p>
  </div>
  

  <div class="col-md-6">
     <label for="inputName">Picture</label>
     <input type="file" name="pic" class="form-control">
  <input type="hidden" name="hidden_pic" value="{{$user[0]['pic'] }}" class="form-control">
  </div>

  <div class="col-md-12">
     <div class="form-group">
      <label for="exampleInputBorder">Details</label>
      <textarea name="person_detail" rows="4" class="form-control textarea" placeholder="Details">{{$user[0]['person_detail'] }}</textarea>
    </div>
  </div>

   <div class="col-md-12 mt-2 card-footer text-center">
    <a href="/dashboard" class="btn btn-danger">Cancel</a>
  <button type="submit" class="btn btn-info">Update Profile</button>
  </div>

</div>
</form>
</div>
<!-- /.tab-pane -->


<div class="tab-pane" id="change_password">
 <form class="form-horizontal" action="" method="POST">
  <div class="form-group row">
   <label for="inputName" class="col-sm-2 col-form-label">Current Password</label>
   <div class="col-sm-10">
    <input type="password" class="form-control" id="inputName" placeholder="Current Password">
  </div>
</div>
<div class="form-group row">
 <label for="inputEmail" class="col-sm-2 col-form-label">New Password</label>
 <div class="col-sm-10">
   <input type="password" class="form-control" id="inputName" placeholder="New Password">

 </div>
</div>
<div class="form-group row">
 <label for="inputName2" class="col-sm-2 col-form-label">Confirm New Password</label>
 <div class="col-sm-10">
  <input type="password" class="form-control" id="inputName2" placeholder="Re-enter New Password">
</div>
</div>


<div class="form-group row">
 <div class="offset-sm-2 col-sm-10">
  <button type="submit" class="btn btn-info">Change Password</button>
</div>
</div>
</form>
</div>
<!-- /.tab-pane -->

</div>
<!-- /.tab-content -->
</div><!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
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
@include('admin.includes.footer')
<!------ end Footer -->

</div>
<!-- ./wrapper -->
<!------ Start Footer links-->
@include('admin.includes.footer_links')
<!------ end Footer links -->
<style type="text/css">
  .des {
   padding: 8px;
   font-weight: 600;
   color: rgba(1, 41, 112, 0.6);
 }

 .par{
   padding: 8px;
 }
</style>
</body>
</html>
