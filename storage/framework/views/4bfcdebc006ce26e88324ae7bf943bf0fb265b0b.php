<?php $__env->startSection('title', 'Treatment Image Gallery'); ?>


<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Treatment Image List</h3>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>

                            <th>
                                Title
                            </th>
                            <th>
                                Image
                            </th>

                            <th style="width:30px">
                                Update
                            </th>
                            <th>
                                Delete
                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($rs->id); ?></td>

                                <td><?php echo e($rs->title); ?></td>
                                <td>
                                    <?php if($rs->image): ?>
                                        <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->image)); ?>"
                                            class="m-0">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($rs->status); ?></td>
                                <td><a class="btn btn-primary me-md-2 mb-1"
                                        href="<?php echo e(route('admin.category.edit', ['id' => $rs->id])); ?>">Edit</a></td>
                                <td><a class="btn btn-inverse-danger btn-fw"
                                        href="<?php echo e(route('admin.category.destroy', ['id' => $rs->id])); ?>"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminindow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/image/index.blade.php ENDPATH**/ ?>