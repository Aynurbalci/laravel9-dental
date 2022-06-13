<?php $__env->startSection('title', 'Edit Treatment :' . $data->title); ?>
<?php $__env->startSection('head'); ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Editing Treatments : <?php echo e($data->title); ?></h3>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Edit Treatment</div>
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo e(route('admin.treatment.update', ['id' => $data->id])); ?>"
                                          method="post"
                                          enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Category</label>
                                            <select class="form-control" name="category_id">
                                                <?php $__currentLoopData = $datalist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($rs->id); ?>"
                                                            <?php if($rs->id == $data->parent_id): ?> selected="selected" <?php endif; ?>>
                                                        <?php echo e(\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Title</label>
                                            <input id="inputText3" type="text" class="form-control" name="title"
                                                   value="<?php echo e($data->title); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Keywords</label>
                                            <input id="inputText3" type="text" class="form-control" name="keywords"
                                                   value="<?php echo e($data->keywords); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Description</label>
                                            <input id="inputText3" type="text" class="form-control" name="description"
                                                   value="<?php echo e($data->detail); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Detail</label>

                                    <textarea name="detail" id="detail" class="form-control" value="<?php echo e($data->detail); ?>">

                                </textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create(document.querySelector('#detail'))
                                                        .then(editor => {
                                                            console.log(editor);
                                                        })
                                                        .catch(error => {
                                                            console.error(error);
                                                        });
                                                </script>



                                </div>

                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Price</label>
                                            <input id="inputText3" value="<?php echo e($data->price); ?>" type="number"
                                                   class="form-control" name="price">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Image</label>
                                            <input id="inputText3" type="file" name="image" class="form-control">

                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option selected="selected"><?php echo e($data->status); ?></option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Update Treatment</button>
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

        <?php $__env->startSection('foot'); ?>
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
            <script>
                $(document).ready(function(){
                    $('#aboutus').summernote();
                    $('#contact').summernote();
                    $('#references').summernote();
                });
            </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/treatment/edit.blade.php ENDPATH**/ ?>