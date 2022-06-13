<?php $__env->startSection('title', 'Process Page'); ?>


<?php $__env->startSection('content'); ?>

    <div class="baner-tittle">
        <a href="<?php echo e(route('home')); ?>" class="font-raguler">Home </a><a href="<?php echo e(route('contact')); ?>"> |
            Process</a>

    </div>
    <?php echo $__env->make('home.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <form class="content-form wow fadeInUp" id="checkout-form"
          action="<?php echo e(route("randevu.storeprocess")); ?>" method="post"
          accept-charset="utf-8" novalidate="novalidate"
          style="visibility: visible; animation-name: fadeInUp;">
        <?php echo csrf_field(); ?>
        <nav id="mainnav" class="mainnav">
            <ul class="menu">


                <li class="col-md-6">

                    <h1>Payment Information</h1>


                    <input tabindex="1" id="name" name="name" value="<?php echo e(Auth::user()->name); ?>" class="input-contact"
                           type="text" placeholder="Name & Surname" required="">


                    <br>


                    <input tabindex="2" id="tel" name="phone" value="" class="input-contact" type="tel"
                           placeholder="Phone Number" required>

                    <br>


                    <input type="email" tabindex="3" id="email" name="email" value="" class="form-control"
                           placeholder="Email" required>


                    <br>


                    <input type="text" tabindex="4" id="subject" name="adress" value="" class="form-control"
                           placeholder="Address" required>





                </li>
                <li class="col-md-6">

                    <h1>Payment Information $<?php echo e($total); ?></h1>


                    <input tabindex="1" id="name" name="total" value="<?php echo e($total); ?>" class="input-contact"
                           type="hidden" placeholder="" required="">





                    <input tabindex="2" id="tel" name="holder" value="" class="input-contact" type="text"
                           placeholder="Card Holder" required="">


                    <br>


                    <input type="text" tabindex="3" id="email" name="number" value="" class="form-control"
                           placeholder="Card Number" required="">


                    <br>


                    <input type="text" tabindex="4" id="subject" name="date" value="" class="form-control"
                           placeholder="Exp. Date">


                    <br>


                    <textarea name="code" type="text" placeholder="Security Code"
                              maxlength="1000"></textarea>


                    <br>

                    <button type="submit">Complete Process</button>



                </li>
            </ul>

        </nav>
    </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/user/process.blade.php ENDPATH**/ ?>