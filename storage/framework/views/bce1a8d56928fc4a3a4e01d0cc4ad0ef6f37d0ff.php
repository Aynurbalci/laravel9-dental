
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E Store - eCommerce HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- Favicon -->
    <link href="<?php echo e(asset('assests')); ?>/img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assests')); ?>/lib/slick/slick.css" rel="stylesheet">
    <link href="<?php echo e(asset('assests')); ?>/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('assests')); ?>/css/style.css" rel="stylesheet">
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="<?php echo e(asset('assests')); ?>/lib/easing/easing.min.js"></script>
     <script src="<?php echo e(asset('assests')); ?>/lib/slick/slick.min.js"></script>

     <!-- Template Javascript -->
     <script src="<?php echo e(asset('assests')); ?>/js/main.js"></script>
 <!-- Code injected by live-server -->


</head>

<body>

    <?php echo $__env->make('home._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- NAVIGATION -->
    <?php $__env->startSection('slider'); ?>
    <?php echo $__env->yieldSection(); ?>
    <?php $__env->startSection('content'); ?>
    içerik alanı
    <?php echo $__env->yieldSection(); ?>

    <?php echo $__env->make('home._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('footerjs'); ?>

















</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/layouts/frontbase.blade.php ENDPATH**/ ?>