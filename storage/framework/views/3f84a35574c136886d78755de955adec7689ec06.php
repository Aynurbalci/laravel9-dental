<?php $__env->startSection('title', 'User Detail:' .$data->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1 class="text-center"><?php echo e($data->title); ?></h1>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="card-body">
                                <h4 class="card-title">User detail Data</h4>

                                <div class="table-responsive pt-3">


                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Id</th>
                                            <td><?php echo e($data->id); ?></td>
                                        </tr>

                                        <tr>
                                            <th>Name & Surname</th>
                                            <td><?php echo e($data->name); ?></td>
                                        </tr>

                                        <tr>
                                            <th>Email</th>
                                            <td><?php echo e($data->email); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Roles</th>
                                            <td> <?php $__currentLoopData = $data->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e($role->name); ?><a href="<?php echo e(route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])); ?>"
                                                                      onclick="return confirm('Deleting !! Are you sure ?')"
                                                                      data-toggle="tooltip" title="Delete" style="size: 5px">[ x ]</a>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                        </tr>

                                        <tr>
                                            <th>Created Date</th>
                                            <td><?php echo e($data->created_at); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Update Date</th>
                                            <td><?php echo e($data->updated_at); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Add Role to User</th>
                                            <td>
                                                <form action="<?php echo e(route('admin.user.addrole', ['id' => $data->id])); ?>" method="post">
                                                   <?php echo csrf_field(); ?>
                                                <select name="role_id">
                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Add Role</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminindow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/user/show.blade.php ENDPATH**/ ?>