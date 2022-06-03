<?php $__env->startSection('title','Frequently Asked Questions | ' . $setting->title); ?>
<?php $__env->startSection('description', $setting->description); ?>
<?php $__env->startSection('keywords', $setting->keywords); ?>
<?php $__env->startSection('icon', \Illuminate\Support\Facades\Storage::url($setting->icon)); ?>

<?php $__env->startSection('content'); ?>


            <div class="container">
                <div class="text-banner wow fadeInDown">
                    <div class="baner-tittle">
                        <a href="<?php echo e(route('home')); ?>" class="font-raguler">Home </a><a href="<?php echo e(route('about')); ?>"> |
                            Frequently Asked Questions</a>
                    </div>
                    <div class="section-title">
                        <h1>Frequently Asked Questions</h1>



                    </div>
                    <div class="baner-tittle">

                       <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <h3><?php echo e($rs->question); ?></h3>
                           <p><?php echo $rs->answer; ?></p>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
            </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/faq.blade.php ENDPATH**/ ?>