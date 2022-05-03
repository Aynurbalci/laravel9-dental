<!DOCTYPE html>
<html lang="en">


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

        <!-- =============== Bootstrap Core CSS =============== -->
        <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css1/bootstrap.min.css" type="text/css">
        <!-- =============== fonts awesome =============== -->
        <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/font1/css/font-awesome.min.css" type="text/css">
        <!-- =============== Plugin CSS =============== -->
        <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css1/animate.min.css" type="text/css">
        <!-- =============== Custom CSS =============== -->
        <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css1/style.css" type="text/css">
        <!-- =============== Owl Carousel Assets =============== -->
        <link href="<?php echo e(asset('assests')); ?>/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo e(asset('assests')); ?>/owl-carousel/owl.theme.css" rel="stylesheet">

         <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css1/isotope-docs.css" media="screen">
          <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css1/baguetteBox.css">



    <?php echo $__env->yieldContent('css'); ?>
    <?php echo $__env->yieldContent('headerjs'); ?>

</head>

<body>
    <?php echo $__env->make('home._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->startSection('slider'); ?>
<?php echo $__env->yieldSection(); ?>
    <?php $__env->startSection('content'); ?>
    içerik alanı
    <?php echo $__env->yieldSection(); ?>
    <?php echo $__env->make('home._contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('footerjs'); ?>

















</body>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/layouts/home.blade.php ENDPATH**/ ?>