<?php $__env->startSection('title', 'Contact | ' . $setting->title); ?>
<?php $__env->startSection('description', $setting->description); ?>
<?php $__env->startSection('keywords', $setting->keywords); ?>
<?php $__env->startSection('icon', \Illuminate\Support\Facades\Storage::url($setting->icon)); ?>

<?php $__env->startSection('content'); ?>


    <div class="container">
        <div class="text-banner wow fadeInDown">
            <div class="baner-tittle">
                <a href="<?php echo e(route('home')); ?>" class="font-raguler">Home </a><a href="<?php echo e(route('contact')); ?>"> |
                    Contact</a>
            </div>
           <?php echo $__env->make('home.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form class="content-form wow fadeInUp" id="checkout-form"
                action="<?php echo e(route("storemessage")); ?>" method="post"
                accept-charset="utf-8" novalidate="novalidate" style="visibility: visible; animation-name: fadeInUp;">
                <?php echo csrf_field(); ?>
                <h1>Contact Area</h1>
                <div class="row">
                    <div class="col">
                        <input tabindex="1" id="name" name="name" value="" class="input-contact" type="text"
                            placeholder="Name & Surname" required="">
                    </div>
                    <div class="col">
                        <input tabindex="2" id="tel" name="tel" value="" class="input-contact" type="text"
                            placeholder="Phone Number" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="email" tabindex="3" id="email" name="email" value="" class="input-contact"
                            placeholder="Email Address" required="">
                    </div>
                    <div class="col">
                        <input type="text" tabindex="4" id="subject" name="subject" value="" class="form-control"
                            placeholder="Subject">
                    </div>
                </div>
                <div>
                    <textarea name="message" type="text"  placeholder="Your Message" maxlength="1000"></textarea>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box-submit">
                            <input name="submit" id="submit" type="submit" class="themesflat-button bg-accent btn-submit"
                             value="Send Message"  >
                        </div>
                    </div>
                </div>
            </form>
            <?php echo $setting->contact; ?>



        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/contact.blade.php ENDPATH**/ ?>