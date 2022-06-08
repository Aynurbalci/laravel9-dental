<?php $__env->startSection('title','Registration Page |'); ?>


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="text-banner wow fadeInDown">
        <div class="baner-tittle">
            <a href="<?php echo e(route('home')); ?>" class="font-raguler">Home </a><a href="<?php echo e(route('registeruser')); ?>"> |
                User Registration</a>
        </div>
        <div class="baner-tittle">
            <?php echo $__env->make('auth.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>
</div>
<br>
<br>
<br>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/register.blade.php ENDPATH**/ ?>