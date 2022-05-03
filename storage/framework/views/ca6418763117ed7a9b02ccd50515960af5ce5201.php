<div class="col-md-12" align="center">
    <div class="header-slider normal-slider" align="center">
        <?php $__currentLoopData = $sliderdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="header-slider-item" >
            <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>" alt=""
            style="width:65em; height:50em;" align="center">
              <div class="header-slider-caption" align="center">
                <p>Some text goes here that describes the image</p>
                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
            </div>
        </div>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/_slider.blade.php ENDPATH**/ ?>