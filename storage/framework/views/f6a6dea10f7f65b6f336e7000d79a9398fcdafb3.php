<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E Store - eCommerce HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- HTML META ETİKETLERİ -->
    <title> <?php echo $__env->yieldContent('title'); ?> </title>
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
    <meta name="author" content="Aynur BALCI">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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


    <!-- 2 -->
    <!-- =============== Bootstrap Core CSS =============== -->
    <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css/bootstrap.min.css" type="text/css">
    <!-- =============== fonts awesome =============== -->
    <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/font/css/font-awesome.min.css" type="text/css">
    <!-- =============== Plugin CSS =============== -->
    <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css/animate.min.css" type="text/css">
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css/style1.css" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="<?php echo e(asset('assests')); ?>/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo e(asset('assests')); ?>/owl-carousel/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="assets<?php echo e(asset('assests')); ?>/css/isotope-docs.css" media="screen">
    <link rel="stylesheet" href="assets<?php echo e(asset('assests')); ?>/css/baguetteBox.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- =============== jQuery =============== -->
    <script src="<?php echo e(asset('assests')); ?>/js/jquery.js"></script>
    <script src="<?php echo e(asset('assests')); ?>/js/isotope-docs.min.js"></script>
    <!-- =============== Bootstrap Core JavaScript =============== -->
    <script src="<?php echo e(asset('assests')); ?>/js/bootstrap.min.js"></script>
    <!-- =============== Plugin JavaScript =============== -->
    <script src="<?php echo e(asset('assests')); ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo e(asset('assests')); ?>/js/jquery.fittext.js"></script>
    <script src="<?php echo e(asset('assests')); ?>/js/wow.min.js"></script>
    <!-- =============== owl carousel =============== -->
    <script src="<?php echo e(asset('assests')); ?>/owl-carousel/owl.carousel.js"></script>
    <!-- Isotope does NOT require jQuery. But it does make things easier -->

    <script src="<?php echo e(asset('assests')); ?>/js/baguetteBox.js" async></script>
    <script src="<?php echo e(asset('assests')); ?>/js/plugins.js" async></script>

    <!-- =============== Custom Theme JavaScript =============== -->
    <script src="<?php echo e(asset('assests')); ?>/js/creative.js"> </script>
    <script src="<?php echo e(asset('assests')); ?>/js/jquery.nicescroll.min.js"></script>



    <?php echo $__env->yieldContent('css'); ?>
    <?php echo $__env->yieldContent('headerjs'); ?>

</head>

<body>

    <?php echo $__env->make('home._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home._menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- NAVIGATION -->
    <div class="  container-fluid">
        <div class="row">
            <?php echo $__env->make('home._category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <?php $__env->startSection('content'); ?>
    içerik alanı
    <?php echo $__env->yieldSection(); ?>
    <?php echo $__env->make('home._contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('footerjs'); ?>

















</body>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/layouts/home.blade.php ENDPATH**/ ?>