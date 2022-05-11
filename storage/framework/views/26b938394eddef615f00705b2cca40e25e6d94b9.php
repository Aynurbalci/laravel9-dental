<?php $__env->startSection('title','Category List'); ?>


<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Setting Page</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active">Setting</li>
            </ol>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/setting.blade.php ENDPATH**/ ?>