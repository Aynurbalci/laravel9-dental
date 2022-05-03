<?php $__env->startSection('title', '$data->title'); ?>



<?php $__env->startSection('content'); ?>
<section id="featured" class="content-section ">

    <div class="section-content col-md-3">
        <div class="owl-carousel owl-theme">

            <div class="item">
                <div class="image">
                    <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($data->image)); ?>" alt="">
                    <div class="featured-button button">
                        <a href="#projects">Continue Reading</a>
                    </div>
                </div>

            </div>



            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/treatment.blade.php ENDPATH**/ ?>