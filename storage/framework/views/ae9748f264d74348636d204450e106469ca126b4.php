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
                                <h4 class="card-title">Detail Message Data</h4>

                                <div class="table-responsive pt-3">


                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Id</th>
                                            <td><?php echo e($data->id); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Treatment</th>
                                            <td><?php echo e($data->treatment->title); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Name & Surname</th>
                                            <td><?php echo e($data->user->name); ?></td>
                                        </tr>

                                        <tr>
                                            <th>Subject</th>
                                            <td><?php echo e($data->subject); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Message</th>
                                            <td><?php echo e($data->review); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Rate</th>
                                            <td><?php echo e($data->rate); ?></td>
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
                                            <th>Admin Note :</th>
                                            <td>
                                                <form action="<?php echo e(route('admin.comment.update', ['id' => $data->id])); ?>" method="post">
                                                   <?php echo csrf_field(); ?>
                                                  <select name="status">
                                                      <option selected><?php echo e($data->status); ?></option>
                                                      <option >True</option>
                                                      <option>False</option>
                                                  </select>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Update Comment</button>
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

<?php echo $__env->make('layouts.adminindow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/comment/show.blade.php ENDPATH**/ ?>