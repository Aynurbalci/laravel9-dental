<header class="header downscrolled clearfix">
    <div id="header">
        <div id="site-header">
            <div class="logo">
                <a href="<?php echo e(route('home')); ?>" <i class="bi bi-hospital" style="background-color:aqua">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                        class="bi bi-hospital" viewBox="0 0 16 16" background-color="blue">
                        <path
                            d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z" />
                        <path
                            d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z" />
                    </svg>
                    </i>
                </a>
            </div>
            <?php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
            ?>
            <div class="nav-wrap">
                <nav id="mainnav" class="mainnav">

                    <ul class="menu">
                        <li class="menu-item-has-children">
                            <a href="<?php echo e(route('home')); ?>" title="">Categories</a>
                            <ul class="sub-menu">
                                <?php $__currentLoopData = $mainCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($rs->children)): ?>
                                        <li><a href="#"><?php echo e($rs->title); ?></a>
                                            <ul class="children">
                                                <?php echo $__env->make('home.categorytree', [
                                                    'children' => $rs->children,
                                                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

                        <li>
                            <a href="<?php echo e(route('contact')); ?>" title="">Contact</a>
                        </li>
                        <li><a href="<?php echo e(route('faq')); ?>" title="">FAQ</a></li>

                        <li class="menu-item-has-children">
                            <a href="blog-standard.html" title="">  <i class="bi bi-person-hearts">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566ZM9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z" />
                                    </svg></i>

                            </a>


                            <ul class="sub-menu">

                                <li><a href="blog-details.html" title="">     <?php if(auth()->guard()->check()): ?>
                                            <strong><?php echo e(Auth::user()->name); ?></strong>
                                            <a href="<?php echo e(route('userpanel.index')); ?>">My Profile</a>
                                            <a href="<?php echo e(route('userpanel.reviews')); ?>">My Reviews</a>
                                            <a href="/logoutuser">Logout</a>
                                            <a href="/logoutuser">Logout</a>

                                        <?php endif; ?>

                                            <?php if(auth()->guard()->guest()): ?>
                                                <a> <a href="/loginuser">Login</a>




                                                 </a></li>
                                <li><a href="/registeruser">Join</a></li>
                                <?php endif; ?>
                            </ul>

                        </li>

                        <li>
                            <a href="<?php echo e(route('randevu.index')); ?>" title=""><i class="bi bi-bag-plus-fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                                    </svg>


                                </i>
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>

<div>
            <div class="button-header">



                </div>







            </div>

        </div>
        </div>
    </div>
</header>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/_header.blade.php ENDPATH**/ ?>