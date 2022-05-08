<div class="rev_slider_wrapper fullwidthbanner-container">
    <div id="rev-slider2" class="rev_slider fullwidthabanner">
        <ul>
            <?php $__currentLoopData = $sliderdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li data-transition="random">

                    <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>" alt="image"
                        data-bgposition="center center" data-no-retina " style="width:1024px; max-height:100px;">

                <div class="tp-caption tp-resizeme slide-font-1" data-x="['left','left','left','center']"
                    data-hoffset="['4','10','20','-15']" data-y="['middle','middle','middle','middle']"
                    data-voffset="['-160','-157','-157','-85']" data-fontsize="['16']"
                    data-lineheight="['70','70','40','24']" data-width="full" data-height="none"
                    data-whitespace="normal" data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="700"
                    data-splitin="none" data-splitout="none" data-responsive_offset="on">
                    <?php echo e($rs->keywords); ?>

                </div>
                <div class="tp-caption tp-resizeme slide-font-2 " data-x="['left','left','left','center']"
                    data-hoffset="['5','5','15','-15']" data-y="['middle','middle','middle','middle']"
                    data-voffset="['-80','-80','-80','-35']" data-fontsize="['68','68','68','45']"
                    data-lineheight="['85','85','85','80']" data-width="full" data-height="none"
                    data-whitespace="normal" data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                    data-splitin="none" data-splitout="none" data-responsive_offset="on">
                    <?php echo e($rs->title); ?>

                </div>
                <div class="tp-caption tp-resizeme slide-font-2" data-x="['left','left','left','center']"
                    data-hoffset="['5','9','19','-15']" data-y="['middle','middle','middle','middle']"
                    data-voffset="['4','2','2','15']" data-fontsize="['68','68','68','45']"
                    data-lineheight="['65','85','85','80']" data-width="full" data-height="none"
                    data-whitespace="normal" data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                    data-splitin="none" data-splitout="none" data-responsive_offset="on">
                    <?php echo e($rs->description); ?>

                </div>
                <div class="tp-caption" data-x="['left','left','left','center']" data-hoffset="['0','10','20','-15']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['108','108','108','85']"
                    data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                    data-splitin="none" data-splitout="none" data-responsive_offset="on">
                    <a href="about-us.html" class="themesflat-button bg-accent big"><span>Who Are We</span></a>
                </div>
            </li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </ul>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/_slider.blade.php ENDPATH**/ ?>