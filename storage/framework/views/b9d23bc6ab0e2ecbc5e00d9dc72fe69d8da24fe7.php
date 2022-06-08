<?php $__env->startSection('title', 'User randevu'); ?>

<?php $__env->startSection('content'); ?>

    <a href="<?php echo e(route('home')); ?>" class="font-raguler">Home </a><a href="<?php echo e(route('contact')); ?>"> |
        User randevu</a>

    <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Remove</th>
        </tr>
        </thead>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody class="align-middle">
        <tr>
            <td>
                <div class="img">
                    <a href="#"><img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>" alt="Image"></a>
                    <p><?php echo e($rs->product->title); ?></p>
                </div>
            </td>
            <td><?php echo e($rs->product->price); ?></td>
            <td>
                <div class="qty">
                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                    <input type="text" value="1">
                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                </div>
            </td>
            <td><?php echo e($rs->product->price); ?></td>
            <td><button><i class="fa fa-trash"></i></button></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        </tbody>
    </table>



    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/user/randevu.blade.php ENDPATH**/ ?>