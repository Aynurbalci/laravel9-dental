<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent("title"); ?></title>
    <meta content="Description" name="<?php echo $__env->yieldContent("description"); ?>">
    <meta content="Keywords" name="<?php echo $__env->yieldContent("keywords"); ?>">
    <meta content="author" name="Aynur BALCI">
<!-- Favicon -->
<link href="<?php echo $__env->yieldContent("keywords"); ?>" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="<?php echo e(asset('assests')); ?>/lib/slick/slick.css" rel="stylesheet">
<link href="<?php echo e(asset('assests')); ?>/lib/slick/slick-theme.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="<?php echo e(asset('assests')); ?>/css/style.css" rel="stylesheet">
</head>

<body>



    <!-- NAVIGATION -->

    <?php echo $__env->yieldContent('content'); ?>




</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/layouts/frontbase.blade.php ENDPATH**/ ?>