<?php $__env->startSection('title','Frequently Asked Questions | ' . $setting->title); ?>
<?php $__env->startSection('description', $setting->description); ?>
<?php $__env->startSection('keywords', $setting->keywords); ?>
<?php $__env->startSection('icon', \Illuminate\Support\Facades\Storage::url($setting->icon)); ?>
<?php $__env->startSection('head'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<?php $__env->stopSection(); ?>


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
<div id="accordion">
                       <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <div class="card">
                        <div class="card-header">
                          <a class="card-link" data-toggle="collapse" href="#collapse<?php echo e($loop->iteration); ?>">
                           <h3><?php echo e($rs->question); ?></h3>
                        </a>
                    </div>

                            <div id="collapse<?php echo e($loop->iteration); ?>" class="collapse <?php if (! $__env->hasRenderedOnce('aa2bfcfe-e9f8-42dc-b71b-a1a7a9b9eaa2')): $__env->markAsRenderedOnce('aa2bfcfe-e9f8-42dc-b71b-a1a7a9b9eaa2'); ?> show <?php endif; ?>" data-parent="#accordion">
                                <div class="card-body">
                           <?php echo $rs->answer; ?>

                        </div>
                            </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                </div>
            </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/faq.blade.php ENDPATH**/ ?>