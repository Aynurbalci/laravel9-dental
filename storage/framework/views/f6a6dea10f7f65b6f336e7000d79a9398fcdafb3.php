<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesflat.com/html/carenow/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 May 2022 00:09:52 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/dent/assets/css/color/color-1.css">
    <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/dent/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/dent/assets/css/responsive.css">

    <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/dent/assets/animation/animate.css">

    <link rel="icon" href="<?php echo e(asset('assests')); ?>/dent/assets/image/Facvicon.webp" sizes="32x32" />

    <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/dent/revolution/css/layers.css">
    <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/dent/revolution/css/settings.css">
    <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/dent/assets/css/responsive.css">

    <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/dent/owlcarousel/assets/owl.theme.default.min.css">


    <link rel="icon" href="<?php echo e(asset('assests')); ?>/dent/assets/image/Facvicon.webp" sizes="32x32" />


    <?php echo $__env->yieldContent('head'); ?>
</head>

<body class="counter-scroll header_sticky">
    <div class="wrapper">
        <div id="page">

            <?php echo $__env->make('home._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div id="main-content" class="site-main clearfix">

                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">

<?php $__env->startSection('slider'); ?>
<?php echo $__env->yieldSection(); ?>
                                <?php echo $__env->yieldContent('content'); ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <?php echo $__env->make('home._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('foot'); ?>

        </div>

    </div>
</body>

</html>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/layouts/home.blade.php ENDPATH**/ ?>