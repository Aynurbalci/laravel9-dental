<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css-->
  <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assests')}}/admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assests')}}/admin/images/favicon.png" />
   <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('assests')}}/admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('assests')}}/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('assests')}}/admin/js/off-canvas.js"></script>
  <script src="{{ asset('assests')}}/admin/js/hoverable-collapse.js"></script>
  <script src="{{ asset('assests')}}/admin/js/template.js"></script>
  <script src="{{ asset('assests')}}/admin/js/settings.js"></script>
  <script src="{{ asset('assests')}}/admin/js/todolist.js"></script>
  <!-- endinjct -->

</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('assests')}}/admin/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form action="{{ route('admin_logincheck')}}"  class="pt-3" method="post">
                  @csrf
                <div class="form-group">
                  <input id="email" type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
</div>
                <div class="form-group">
                  <input id="password" type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="{{ asset('assests')}}/admin/index.html">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button  class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook me-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

</body>

</html>
