<?php $__env->startSection('title','User Login |'); ?>


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="text-banner wow fadeInDown">
        <div class="baner-tittle">
            <a href="<?php echo e(route('home')); ?>" class="font-raguler">Home </a><a href="<?php echo e(route('loginuser')); ?>"> |
                User Login</a>
        </div>
        <div class="baner-tittle">
            <?php echo $__env->make('auth.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/login.blade.php ENDPATH**/ ?>