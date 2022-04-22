<?php $__env->startSection('title','Treatment List'); ?>


<?php $__env->startSection('content'); ?>

<div class="card">
    <h2 class="text-left">Treatment list</h2>
    <div class="card-body">
        <button type="button" class="btn btn-outline-danger btn-icon-text">
            <a href="<?php echo e(route('admin.treatment.create')); ?>" class="ti-upload btn-icon-prepend" style="text-decoration:none"> Add Treatment</a>

        </button>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                       <th>Image Gallery</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(($rs->id)); ?></td>
                        <td>
                            <?php echo e(\App\Http\Controllers\AdminPanel\TreatmentController::getParentsTree($rs, $rs->title)); ?>

                        </td>
                        <td><?php echo e(($rs->title)); ?></td>
                        <td><?php echo e($rs->price); ?></td>
                        <td>
                            <?php if($rs->image): ?>
                            <img src="images/<?php echo e(($rs->image)); ?>" style="height:40px">
                            <?php endif; ?>
                        </td>
                        <td><?php echo e(($rs->status)); ?></td>
                        <td><a class="btn btn-inverse-primary btn-fw" href="<?php echo e(route('admin.treatment.edit',['id'=>$rs->id])); ?>">Edit</a></td>
                        <td><a class="btn btn-inverse-danger btn-fw" href="<?php echo e(route('admin.treatment.destroy',['id'=>$rs->id])); ?>" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>


                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/treatment/index.blade.php ENDPATH**/ ?>