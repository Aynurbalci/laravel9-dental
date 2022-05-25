<?php $__env->startSection('title','About Us | ' . $setting->title); ?>
<?php $__env->startSection('description', $setting->description); ?>
<?php $__env->startSection('keywords', $setting->keywords); ?>
<?php $__env->startSection('icon', \Illuminate\Support\Facades\Storage::url($setting->icon)); ?>

<?php $__env->startSection('content'); ?>


            <div class="container">
                <div class="text-banner wow fadeInDown">
                    <div class="baner-tittle">
                        <a href="<?php echo e(route('home')); ?>" class="font-raguler">Home </a><a href="<?php echo e(route('about')); ?>"> |
                            About Us</a>
                    </div>
                    <div class="baner-tittle">
                        <?php echo $setting->aboutus; ?>

                    </div>

                </div>
            </div>


    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/about.blade.php ENDPATH**/ ?>