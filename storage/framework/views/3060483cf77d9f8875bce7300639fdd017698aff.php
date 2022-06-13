<?php $__env->startSection('title', $category->title . ' Treatments'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php $__currentLoopData = $treatments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="box-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="img">
                        <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>" alt="image">
                    </div>
                    <div class="box-wrap">
                        <div class="title">
                            <a href="<?php echo e(route('treatment', ['id' => $rs->id])); ?>"> <?php echo e($rs->title); ?></a>
                        </div>
                        <p class="pdt-10 text-color-title-sidebar">
                            <?php echo $rs->detail; ?>

                        </p>
                        <div class="flat-read-more">
                            <button href="" class="themesflat-button font-default small">
                                <span>Read More<i class="fa fa-arrow-right"></i> </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>



    <br>
    <br><br>
    <br><br>
    <br><br>
    <br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/categorytreatments.blade.php ENDPATH**/ ?>