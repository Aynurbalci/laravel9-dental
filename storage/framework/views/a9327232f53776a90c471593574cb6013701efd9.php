<?php $__env->startSection('title','Admin Panel Home Page'); ?>


<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin._content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/index.blade.php ENDPATH**/ ?>