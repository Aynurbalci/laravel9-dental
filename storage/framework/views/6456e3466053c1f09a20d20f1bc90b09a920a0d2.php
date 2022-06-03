<?php $__env->startSection('title', 'Edit FAQ :' . $data->title); ?>
<?php $__env->startSection('head'); ?>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Editing FAQs : <?php echo e($data->title); ?></h3>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Edit FAQ</div>
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo e(route('admin.faq.update', ['id' => $data->id])); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>

                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Question</label>
                                            <input id="inputText3" type="text" class="form-control" name="question"
                                                value="<?php echo e($data->question); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Answer</label>
                                            <input id="inputText3" type="text" class="form-control" name="answer"
                                                value="<?php echo e($data->answer); ?>">
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
                                            <button class="btn btn-primary" type="submit">Update FAQ</button>
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
                $(function(){
                    $('.textarea').summernote()
                })
            </script>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/faq/edit.blade.php ENDPATH**/ ?>