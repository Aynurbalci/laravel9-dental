<div class="header">
    <div class="container-fluid">
        <div class="row">

            <div id="owl-demo" class="owl-carousel header1">

                <?php $__currentLoopData = $sliderdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div>
                    <div class="col-xs-12 col-sm-6 col-md-6 header-text">
                        <h2 class="wow bounceIn animated" data-wow-delay=".40s">FRIENDLY <span>TEMPLATE</span> FOR <br />YOUR <?php echo e($rs->title); ?></h2>
                        <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>" alt="" style="width:550px; height:600px;">

                        <div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> <span>Click Here</span></i>
                        </div>
                        </p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/_slider.blade.php ENDPATH**/ ?>