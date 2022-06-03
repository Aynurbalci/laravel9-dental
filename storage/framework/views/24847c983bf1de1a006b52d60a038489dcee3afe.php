<header class="header downscrolled clearfix">
    <div id="header">
        <div id="site-header">
            <div class="logo">
                <a href="index-2.html">
                    <img src="<?php echo e(asset('assests')); ?>/dent/assets/image/LogoDark.webp" alt="image">
                </a>
            </div>
            <?php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
            ?>
            <div class="nav-wrap">
                <nav id="mainnav" class="mainnav">

                    <ul class="menu">
                        <li class="menu-item-has-children">
                            <a href="about-us.html" title="">Categories</a>
                            <ul class="sub-menu">
                                <?php $__currentLoopData = $mainCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($rs->children)): ?>
                                        <li><a href="#"><?php echo e($rs->title); ?></a>
                                            <ul class="children">
                                                <?php echo $__env->make('home.categorytree', ['children' => $rs->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </ul>
                                        </li>
                                    <?php else: ?>
                                        <li><a href="#"><?php echo e($rs->title); ?></a></li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo e(route('home')); ?>" title="">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('about')); ?>" title="">About Us</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('references')); ?>" title="">References</a>
                        </li>
                        <li >
                            <a href="<?php echo e(route('references')); ?>" title="">Services</a>



                        </li>
                        <li>
                            <a href="<?php echo e(route('contact')); ?>" title="">Contact</a>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="blog-standard.html" title="">Other</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo e(route('faq')); ?>" title="">FAQ</a></li>
                                <li><a href="blog-details.html" title="">Blog Details</a></li>
                            </ul>

                        </li>


                    </ul>

                </nav>
            </div>

            <div class="contact">
                <div class="top-bar-right">
                    <div class="call-us">
                        <div class="icon-call-us"></div>
                        <div class="content-call-us">
                            <p>Call Us</p>
                            <a href="tel:360-779-2228" class="font-bold text-color-title-sidebar">360-779-2228</a>
                        </div>
                    </div>
                    <div class="button-header">
                        <a href="book-appointment.html" class="themesflat-button bg-accent btn-header"><span>Get
                                Appointment</span></a>
                    </div>
                </div>
            </div>
            <div class="btn-menu">
                <span></span>
            </div>
        </div>
    </div>
</header>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/_header.blade.php ENDPATH**/ ?>