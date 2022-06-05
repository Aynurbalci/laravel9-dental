<?php $__env->startSection('title', 'Comment & reviews List'); ?>


<?php $__env->startSection('content'); ?>

    <div class="card">
        <h2 class="text-left">Comment list</h2>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Treatment</th>
                            <th>Subject</th>
                            <th>Reviews</th>
                            <th>Rate</th>
                            <th>Status</th>

                            <th>Delete</th>
                            <th>Show</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($rs->id); ?></td>

                                <td><?php echo e($rs->user->name); ?></td>
                                <td><a href="<?php echo e(route('admin.treatment.show',['id'=>$rs->treatment_id])); ?>"><?php echo e($rs->treatment->title); ?></a></td>
                                <td><?php echo e($rs->subject); ?></td>
                                <td><?php echo e($rs->review); ?></td>
                                <td><?php echo e($rs->rate); ?></td>

                                <td><?php echo e($rs->status); ?></td>

                                <td><a class="btn btn-inverse-danger btn-fw"
                                        href="<?php echo e(route('admin.comment.destroy', ['id' => $rs->id])); ?>"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                <td><a  class="btn btn-inverse-success btn-fw"
                                        href="<?php echo e(route('admin.comment.show', ['id' => $rs->id])); ?>" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a></td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/comment/index.blade.php ENDPATH**/ ?>