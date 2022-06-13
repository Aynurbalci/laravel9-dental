<?php $__env->startSection('title', 'Show Messages:' .$data->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1 class="text-center"><?php echo e($data->title); ?></h1>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="card-body">
                                <h4 class="card-title">Process Detail</h4>

                                <div class="table-responsive pt-3">


                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Id</th>
                                            <td><?php echo e($data->id); ?></td>
                                        </tr>
                                        <tr>
                                            <th>User</th>
                                            <td><?php echo e($data->user->name); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Name & Surname</th>
                                            <td><?php echo e($data->name); ?></td>
                                        </tr>

                                        <tr>
                                            <th>Phone</th>
                                            <td><?php echo e($data->phone); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?php echo e($data->email); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td><?php echo e($data->adress); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Ip Number</th>
                                            <td><?php echo e($data->IP); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td><?php echo e($data->status); ?></td>
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
                                            <th>Admin Note :
                                                <br>   <br>
                                            Status:
                                            </th>
                                            <td>
                                                <form action="<?php echo e(route('admin.process.update', ['id' => $data->id])); ?>" method="post">
                                                   <?php echo csrf_field(); ?>
                                                    <textarea name="note" cols="100" rows="5">
<?php echo e($data->note); ?>


                                                    </textarea>
                                                    <br>
                                                  <select name="status">
                                                      <option selected><?php echo e($data->status); ?></option>
                                                      <option >Accepted</option>
                                                      <option>Shipped</option>
                                                      <option>Canceled</option>
                                                      <option>Completed</option>
                                                  </select>

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Id</th>

                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                            <th>Image</th>

                                            <th>Status</th>

                                            <th>Cancel</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($rs->id); ?></td>

                                                <td><?php echo e($rs->treatment->title); ?></td>
                                                <td><?php echo e($rs->price); ?></td>
                                                <td><?php echo e($rs->amount); ?></td>
                                                <td>
                                                    <?php if($rs->treatment->image): ?>
                                                        <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($rs->treatment->image)); ?>" height="30"
                                                             alt="">
                                                    <?php endif; ?>

                                                </td>

                                                <td><?php echo e($rs->status); ?></td>
                                                <td><a class="btn btn-inverse-success btn-fw"
                                                       href="<?php echo e(route('admin.process.accepttreatment', ['id' => $rs->id])); ?>"
                                                       onclick="return confirm('Accepting !! Are you sure ?')">Accept</a>
                                                <br>
                                                <a class="btn btn-inverse-danger btn-fw"
                                                       href="<?php echo e(route('admin.process.canceltreatment', ['id' => $rs->id])); ?>"
                                                       onclick="return confirm('Cancelling !! Are you sure ?')">Cancel</a></td>


                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
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

<?php echo $__env->make('layouts.adminindow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/process/show.blade.php ENDPATH**/ ?>