<header class="header downscrolled clearfix">
    <div id="header">
        <div id="site-header">
            <div class="logo">
                <a href="index-2.html">
                    <img src="<?php echo e(asset('assests')); ?>/dent/assets/image/LogoDark.webp" alt="image">
                </a>
            </div>

            <li class="nav-wrap">
                <nav id="mainnav" class="mainnav">
                    <ul class="menu">
                        <?php
                            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
                        ?>
                        <li class="active menu-item-has-children">
                            <a href="index-2.html" title="">Category</a>
                            <ul class="sub-menu">
                                <?php $__currentLoopData = $mainCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class=" menu-item-has-children">
                                        <a><?php echo e($rs->title); ?></a>
                                        <ul class="sub-menu">
                                            <li><a href="services.html" title="">  <?php if(count($rs->children)): ?>
                                                        <?php echo $__env->make('home.categorytree',['children'=>$rs->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    <?php endif; ?></a></li>

                                        </ul>
                                    </li>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            </ul>
                        </li>
                                <li class="active menu-item-has-children">

                                    <a href="index-2.html" title="">Category</a>
                                    <ul class="sub-menu">


                                        <?php $__currentLoopData = $mainCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="dropdown side-dropdown">

                                                <button type="button" class="btn btn-secondary dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                    <?php echo e($rs->title); ?>

                                                    <div class="custom-menu">
                                                        <div class="row">
                                                            <?php if(count($rs->children)): ?>
                                                                <?php echo $__env->make('home.categorytree',['children'=>$rs->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </button>


                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </li>
                                    </ul>

                                </li>

                                <li class="menu-item-has-children">
                                    <a href="about-us.html" title="">About Us</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html" title="">About</a></li>
                                        <li><a href="doctor.html" title="">Doctor</a></li>
                                        <li><a href="doctor-details.html" title="">Doctor Details</a></li>
                                        <li><a href="pricing-table.html" title="">Our Pricing</a></li>
                                        <li><a href="gallery.html" title="">Gallery</a></li>
                                        <li><a href="faq.html" title="">FAQ</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="services.html" title="">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="services.html" title="">Services</a></li>
                                        <li><a href="service-details.html" title="">Services Details</a></li>
                                    </ul>

                                </li>

                                <li>
                                    <a href="book-appointment.html" title="">Book Appointment</a>
                                </li>
                                <li>
                                    <a href="contact.html" title="">Contact</a>
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