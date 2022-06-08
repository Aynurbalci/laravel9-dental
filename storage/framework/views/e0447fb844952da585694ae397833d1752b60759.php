<?php $__env->startSection('title', $data->title); ?>
<?php $__env->startSection('description', $data->description); ?>
<?php $__env->startSection('keywords', $data->keywords); ?>
<?php $__env->startSection('icon', \Illuminate\Support\Facades\Storage::url($data->icon)); ?>

<?php $__env->startSection('head'); ?>
    <style>
        i#star {
            color: black;
        }

        i#active {
            color: yellow;
        }

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">

            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo e($data->category->title); ?></a></li>
                <li class="breadcrumb-item active"><?php echo e($data->title); ?></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Detail Start -->
    <div class="product-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product-detail-top">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="product-slider-single normal-slider">


                                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>"
                                             alt="Product Image">

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                                <div class="product-slider-single-nav normal-slider">

                                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="slider-nav-img">
                                            <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>"
                                                 alt="Product Image">
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-content">
                                    <?php echo $__env->make('home.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="title">
                                        <h2><?php echo e($data->title); ?></h2>
                                    </div>
                                    <?php
                                        $avg=$data->comment->average('rate');
                                    ?>

                                    <div class="reviews-submitted">
                                        <div class="reviewer">

                                        <div class="ratting">
                                        <i id="<?php echo e($avg >= 1 ? 'active' : 'star'); ?>" class="fa fa-star"></i>
                                        <i id="<?php echo e($avg >= 2 ? 'active' : 'star'); ?>" class="fa fa-star"></i>
                                        <i id="<?php echo e($avg >= 3 ? 'active' : 'star'); ?>"  class="fa fa-star"></i>
                                        <i id="<?php echo e($avg >= 4 ? 'active' : 'star'); ?>" class="fa fa-star"></i>
                                        <i id="<?php echo e($avg >= 5 ? 'active' : 'star'); ?>" class="fa fa-star"></i>
                                    </div>
                                    </div>
                                </div>
                                    <a href="#"><?php echo e(number_format($avg,1)); ?> / Review(<?php echo e($data->comment->count('id')); ?>

                                        )</a>
                                    <div class="price">

                                        <p>$<?php echo e($data->price * 1.2); ?> <span>$<?php echo e($data->price * 5); ?></span></p>
                                    </div>
<form method="post" action>
                                    <div class="quantity">
                                        <h4>Quantity:</h4>
                                        <div class="qty">

                                            <button class="btn-minus"><i class="fa fa-minus"></i></button>

                                            <input type="text" value="1">
                                            <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>

                                    <div class="action">

                                        <button class="btn" type="submit"><i class="fa fa-shopping-bag"></i>Add to treatments</button>
                                    </div>
</form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row product-detail-bottom">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#specification">Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#reviews">Reviews(<?php echo e($data->comment->count('id')); ?>) </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="description" class="container tab-pane active">
                                    <h4>Treatment description</h4>
                                    <p>
                                        <?php echo e($data->description); ?>

                                    </p>
                                </div>
                                <div id="specification" class="container tab-pane fade">
                                    <h4>Treatment Details</h4>
                                    <p>
                                        <?php echo $data->detail; ?>

                                    </p>
                                </div>
                                <div id="reviews" class="container tab-pane fade">
                                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="reviews-submitted">
                                            <div class="reviewer">
                                                <?php echo e($rs->user->name); ?><span><?php echo e($rs->created_at); ?></span></div>
                                            <div class="ratting">
                                                <i id="<?php echo e($rs->rate >= 1 ? 'active' : 'star'); ?>" class="fa fa-star"></i>
                                                <i id="<?php echo e($rs->rate >= 2 ? 'active' : 'star'); ?>" class="fa fa-star"></i>
                                                <i id="<?php echo e($rs->rate >= 3 ? 'active' : 'star'); ?>" class="fa fa-star"></i>
                                                <i id="<?php echo e($rs->rate >= 4 ? 'active' : 'star'); ?>" class="fa fa-star"></i>
                                                <i id="<?php echo e($rs->rate >= 5 ? 'active' : 'star'); ?>" class="fa fa-star"></i>
                                            </div>
                                            <strong><?php echo e($rs->subject); ?></strong>
                                            <p>
                                                <?php echo e($rs->review); ?>

                                            </p>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <form action="<?php echo e(route('storecomment')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input class="input" type="hidden" name="treatment_id"
                                               value="<?php echo e($data->id); ?>"/>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="subject"
                                                       placeholder="Subject">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" name="review"
                                                      placeholder="Your review"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                        </div>


                                        <h1>Star rating </h1>

                                        <div class="rating">

                                            <input type="radio" name="rate" value="5" id="5"><label for="5">☆</label>
                                            <input type="radio" name="rate" value="4" id="4"><label for="4">☆</label>
                                            <input type="radio" name="rate" value="3" id="3"><label for="3">☆</label>
                                            <input type="radio" name="rate" value="2" id="2"><label for="2">☆</label>
                                            <input type="radio" name="rate" value="1" id="1"><label for="1">☆</label>
                                        </div>
                                        <?php if(auth()->guard()->check()): ?>
                                            <div>
                                                <button class="btn" type="submit">Send Message</button>
                                            </div>
                                        <?php else: ?>
                                            <a href="/login" class="primary-btn">For Submit Your Review, Please
                                                Login</a>
                                        <?php endif; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>





    <!-- Footer Bottom End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('assests')); ?>/lib/easing/easing.min.js"></script>
    <script src="<?php echo e(asset('assests')); ?>/lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('assests')); ?>/js/main.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/treatment.blade.php ENDPATH**/ ?>