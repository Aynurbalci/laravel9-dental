<?php $__env->startSection('title', 'User Panel'); ?>

<?php $__env->startSection('content'); ?>

    <a href="<?php echo e(route('home')); ?>" class="font-raguler">Home </a><a href="<?php echo e(route('contact')); ?>"> |
        User Panel</a>
    <nav id="mainnav" class="mainnav">

        <ul class="menu">

            <li class="col-md-2">
                <a href="http://127.0.0.1:8001" title="">User Menu</a>
                <?php echo $__env->make('home.user.usermenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </li>
            <li class="col-md-9">
                <a href="http://127.0.0.1:8001/about" title="">User Panel</a>
                <?php echo $__env->make('profile.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </li>



        </ul>

    </nav>




    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/user/index.blade.php ENDPATH**/ ?>