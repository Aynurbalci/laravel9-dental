<?php $__env->startSection('title', 'Show Treatments:' .$data->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1 class="text-center"><?php echo e($data->title); ?></h1>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Show Treatment</div>
                            <div class="card-body">
                                <h4 class="card-title">Detail</h4>

                                <div class="table-responsive pt-3">
                                    <a class="btn btn-inverse-primary btn-fw"
                                        href="<?php echo e(route('admin.treatment.edit', ['id' => $data->id])); ?>">Edit</a>
                                    <a class="btn btn-inverse-danger btn-fw"
                                        href="<?php echo e(route('admin.treatment.destroy', ['id' => $data->id])); ?>"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Id</th>
                                            <td><?php echo e($data->id); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td>

                                                <?php echo e(\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title)); ?>

                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td><?php echo e($data->title); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Keywords</th>
                                            <td><?php echo e($data->keywords); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td><?php echo e($data->price); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Detail Info</th>
                                            <td><?php echo e($data->detail); ?></td>
                                        </tr>

                                        <tr>
                                            <th>Image</th>
                                            <td>
                                                <?php if($data->image): ?>
                                                    <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($data->image)); ?>"
                                                        style="height:100px">
                                                <?php endif; ?>
                                            </td>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/treatment/show.blade.php ENDPATH**/ ?>