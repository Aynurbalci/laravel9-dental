<?php $__env->startSection('title', 'Add Treatment'); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Adding Treatment : </h3>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Add Treatment</div>
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo e(route('admin.treatment.store')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>

                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Category</label>
                                            <select class="form-control" name="parent_id">

                                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($rs->id); ?>">
                                                        <?php echo e(\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Title</label>
                                            <input id="inputText3" type="text" class="form-control" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Keywords</label>
                                            <input id="inputText3" type="text" class="form-control" name="keywords">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Description</label>
                                            <input id="inputText3" type="text" class="form-control" name="description">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Detail</label>
                                            <input type="text" class="form-control" name="detail"></İ>

                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Price</label>
                                            <input id="inputText3" value="0" type="number" class="form-control"
                                                name="price">
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option selected="selected">False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Add Treatment</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/treatment/create.blade.php ENDPATH**/ ?>