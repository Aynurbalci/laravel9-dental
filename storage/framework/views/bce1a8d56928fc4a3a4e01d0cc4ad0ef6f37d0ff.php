
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sentra - Free Bootstrap Theme</title>

<!--

Sentra Template

https://templatemo.com/tm-518-sentra

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css1/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css1/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css1/fontAwesome.css">
        <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css1/light-box.css">
        <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css1/owl-carousel.css">
        <link rel="stylesheet" href="<?php echo e(asset('assests')); ?>/css1/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="<?php echo e(asset('assests')); ?>/js1/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo e(asset('assests')); ?>/js1/vendor/bootstrap.min.js"></script>

        <script src="<?php echo e(asset('assests')); ?>/js1/plugins.js"></script>
        <script src="<?php echo e(asset('assests')); ?>/js1/main.js"></script>

        <script>
            // Hide Header on on scroll down
            var didScroll;
            var lastScrollTop = 0;
            var delta = 5;
            var navbarHeight = $('header').outerHeight();

            $(window).scroll(function(event){
                didScroll = true;
            });

            setInterval(function() {
                if (didScroll) {
                    hasScrolled();
                    didScroll = false;
                }
            }, 250);

            function hasScrolled() {
                var st = $(this).scrollTop();

                // Make sure they scroll more than delta
                if(Math.abs(lastScrollTop - st) <= delta)
                    return;

                // If they scrolled down and are past the navbar, add class .nav-up.
                // This is necessary so you never see what is "behind" the navbar.
                if (st > lastScrollTop && st > navbarHeight){
                    // Scroll Down
                    $('header').removeClass('nav-down').addClass('nav-up');
                } else {
                    // Scroll Up
                    if(st + $(window).height() < $(document).height()) {
                        $('header').removeClass('nav-up').addClass('nav-down');
                    }
                }

                lastScrollTop = st;
            }
        </script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

    </head>
<body>

    <?php echo $__env->make('home._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home._menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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