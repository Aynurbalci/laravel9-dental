<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(('assests')); ?>/admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?php echo e(('assests')); ?>/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo e(('assests')); ?>/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo e(('assests')); ?>/admin/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?php echo e(('assests')); ?>/admin/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo e(('assests')); ?>/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo e(('assests')); ?>/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo e(('assests')); ?>/admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo e(('assests')); ?>/admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo e(('assests')); ?>/admin/images/favicon.png" />
    <?php echo $__env->yieldContent("head"); ?>
</head>
<body>
<div class="container-scroller">
    <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid page-body-wrapper">
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel">
            <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<?php echo $__env->yieldContent('foot'); ?>

<!-- plugins:js -->
<script src="<?php echo e(('assests')); ?>/admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo e(('assests')); ?>/admin/vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo e(('assests')); ?>/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo e(('assests')); ?>/admin/vendors/progressbar.js/progressbar.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo e(('assests')); ?>/admin/js/off-canvas.js"></script>
<script src="<?php echo e(('assests')); ?>/admin/js/hoverable-collapse.js"></script>
<script src="<?php echo e(('assests')); ?>/admin/js/template.js"></script>
<script src="<?php echo e(('assests')); ?>/admin/js/settings.js"></script>
<script src="<?php echo e(('assests')); ?>/admin/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo e(('assests')); ?>/admin/js/jquery.cookie.js" type="text/javascript"></script>
<script src="<?php echo e(('assests')); ?>/admin/js/dashboard.js"></script>
<script src="<?php echo e(('assests')); ?>/admin/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/layouts/adminbase.blade.php ENDPATH**/ ?>