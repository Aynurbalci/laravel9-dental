<?php $__env->startSection('title',$category->title . ' Treatments'); ?>


<?php $__env->startSection('content'); ?>

    <li class="active">   <?php echo e($category->title); ?></li>

    <div class="row">



        <div class="col-lg-4">
            <?php $__currentLoopData = $treatments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-process">

                <div class="box-process wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                    <div class="feature-process">


                        <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="40" data-smobile="40" style="height:40px"></div>
                        <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>" alt="image">
                    </div>
                    <div class="box-wrap pdt-30">

                        <h2>
                            <?php echo e($rs->title); ?>

                        </h2>
                        <p class="text-color-title-sidebar">
<?php echo e($rs->detail); ?>

                        </p>
                        <div class="flat-read-more">
                            <a href="<?php echo e(route('product',['id'=>$rs->id])); ?>" class="themesflat-button font-default process">
                                <span>Read More<i class="fa fa-arrow-right"></i> </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>






    </div>
    <br>
    <br><br>
    <br><br>
    <br><br>
    <br>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/categorytreatment.blade.php ENDPATH**/ ?>