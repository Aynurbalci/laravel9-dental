<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent("title"); ?></title>
    <meta content="Description" name="<?php echo $__env->yieldContent("description"); ?>">
    <meta content="Keywords" name="<?php echo $__env->yieldContent("keywords"); ?>">
    <meta content="author" name="Aynur BALCI">
    <style>
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
        }

        .rating > input{ display:none;}

        .rating > label {
            position: relative;
            width: 1em;
            font-size: 6vw;
            color: #FFD600;
            cursor: pointer;
        }
        .rating > label::before{
            content: "\2605";
            position: absolute;
            opacity: 0;
        }
        .rating > label:hover:before,
        .rating > label:hover ~ label:before {
            opacity: 1 !important;
        }

        .rating > input:checked ~ label:before{
            opacity:1;
        }

        .rating:hover > input:checked ~ label:before{ opacity: 0.4; }

        body{ background: #222225; color: white;}
        h1, p{
            text-align: center;

        }

        h1{
            margin-top:150px;
        }
        p{ font-size: 1.2rem;}
        @media  only screen and (max-width: 600px) {
            h1{font-size: 14px;}
            p{font-size: 12px;}
        }


    </style>
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
    <?php echo $__env->yieldContent('head'); ?>
</head>

<body>





    <?php echo $__env->yieldContent('content'); ?>




</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/layouts/frontbase.blade.php ENDPATH**/ ?>