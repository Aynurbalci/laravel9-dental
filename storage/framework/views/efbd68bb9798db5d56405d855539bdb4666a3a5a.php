<?php $__env->startSection('title','Category List'); ?>


<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-outline-danger btn-icon-text">
            <a href="<?php echo e(route('admin.category.create')); ?>" class="ti-upload btn-icon-prepend" style="text-decoration:none"> Add Category</a>

        </button>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                           Parent
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            Status
                        </th>
                        <th style="width:30px">
                            Edit
                        </th>
                        <th>
                            Delete
                        </th>
                        <th>
                            Show
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(($rs->id)); ?></td>
                        <td>
                            <?php echo e(\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)); ?>

                        </td>
                        <td><?php echo e(($rs->title)); ?></td>
                        <td>
                            <?php if($rs->image): ?>
                                  <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>" class="m-0">
                            <?php endif; ?>
                        </td>
                        <td><?php echo e(($rs->status)); ?></td>
                        <td><a class="btn btn-primary me-md-2 mb-1" href="<?php echo e(route('admin.category.edit',['id'=>$rs->id])); ?>">Edit</a></td>
                        <td><a class="btn btn-inverse-danger btn-fw" href="<?php echo e(route('admin.category.destroy',['id'=>$rs->id])); ?>" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                        <td><a class="btn btn-inverse-success btn-fw" href="<?php echo e(route('admin.category.show',['id'=>$rs->id])); ?>">Show</a></td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/category/index.blade.php ENDPATH**/ ?>