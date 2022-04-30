<?php $__env->startSection('title', 'Treatment Image Gallery'); ?>


<?php $__env->startSection('content'); ?>
    <h3><?php echo e($treatment->title); ?></h3>
    <hr>
    <form action="<?php echo e(route('admin.image.store', ['pid' => $treatment->id])); ?>" method="post"
        enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="inputText3" class="col-form-label">Title</label>
        <input id="inputText3" type="text" class="form-control" name="title">
        <div class="input-group-append">
            <label>image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-primary" type="submit" value="Upload">Save</button>

    </div>




    </form>
    <table class="table table-bordered">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
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
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminindow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/image/index.blade.php ENDPATH**/ ?>