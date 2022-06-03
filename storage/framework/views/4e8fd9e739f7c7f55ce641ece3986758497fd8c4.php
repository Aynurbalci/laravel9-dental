<?php $__env->startSection('title', 'FAQ List'); ?>


<?php $__env->startSection('content'); ?>

    <div class="card">
        <h2 class="text-left">FAQ list</h2>
        <div class="card-body">
            <button type="button" class="btn btn-outline-danger btn-icon-text">
                <a href="<?php echo e(route('admin.faq.create')); ?>" class="ti-upload btn-icon-prepend"
                    style="text-decoration:none"> Add Question</a>

            </button>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th>Id</th>
                            <th>Questions</th>
                            <th>Answer</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Show</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($rs->id); ?></td>
                                <td><?php echo e($rs->question); ?></td>
                                <td><?php echo $rs->answer; ?></td>
                                <td><?php echo e($rs->status); ?></td>
                                <td><a class="btn btn-inverse-primary btn-fw"
                                        href="<?php echo e(route('admin.faq.edit', ['id' => $rs->id])); ?>">Edit</a></td>
                                <td><a class="btn btn-inverse-danger btn-fw"
                                        href="<?php echo e(route('admin.faq.destroy', ['id' => $rs->id])); ?>"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                <td><a class="btn btn-inverse-success btn-fw"
                                        href="<?php echo e(route('admin.faq.show', ['id' => $rs->id])); ?>">Show</a></td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/faq/index.blade.php ENDPATH**/ ?>