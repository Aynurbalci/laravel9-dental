<?php $__env->startSection('title', 'Add FAQ'); ?>
<?php $__env->startSection('head'); ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Adding FAQ : </h3>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Add FAQ</div>
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo e(route('admin.faq.store')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>


                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Question</label>
                                            <input id="inputText3" type="text" class="form-control" placeholder="Question" name="question">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Answer</label>

                                                <div class="col-sm-8">
                                                    <textarea name="answer" id="contacttext" class="form-control">

                                                    </textarea>
                                                        <script>
                                                            ClassicEditor
                                                                .create(document.querySelector('#answer'))
                                                                .then(editor => {
                                                                    console.log(editor);
                                                                })
                                                                .catch(error => {
                                                                    console.error(error);
                                                                });
                                                        </script>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option selected="selected">False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Add FAQ</button>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/faq/create.blade.php ENDPATH**/ ?>