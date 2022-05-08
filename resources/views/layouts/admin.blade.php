<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assests')}}/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{ asset('assests')}}/admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assests')}}/admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assests')}}/admin/images/favicon.png" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    @yield('head')
</head>

<body>
    <div class="container-scroller">

        @include('admin._header')
        <div class="container-fluid page-body-wrapper">

            @include('admin._sidebar')
            <div class="main-panel">
                @yield('content')
                @include('admin._footer')

            </div>

        </div>
    </div>
    @yield('foot')
    <!-- plugins:js -->
    <script src="{{ asset('assests')}}/admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assests')}}/admin/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('assests')}}/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('assests')}}/admin/vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assests')}}/admin/js/off-canvas.js"></script>
    <script src="{{ asset('assests')}}/admin/js/hoverable-collapse.js"></script>
    <script src="{{ asset('assests')}}/admin/js/template.js"></script>
    <script src="{{ asset('assests')}}/admin/js/settings.js"></script>
    <script src="{{ asset('assests')}}/admin/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assests')}}/admin/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="{{ asset('assests')}}/admin/js/dashboard.js"></script>
    <script src="{{ asset('assests')}}/admin/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
