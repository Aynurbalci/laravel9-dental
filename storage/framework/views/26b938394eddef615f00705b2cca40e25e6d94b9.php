<?php $__env->startSection('title','Settings'); ?>


<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Setting Page</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadrumb float-sm-right d-flex flex-row" style="list-style-type: none">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item active">Setting</li>
            </ol>
        </div>
        <div class="card">
            <div class="container mt-3">
                <!-- Nav pills -->
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#general">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#smtp">Smtp Email</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#social">Social Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#contact">Contact Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#referances">Referances</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <form role="form" action="" method="post"
                      enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="tab-content">
                        <div id="general" class="container tab-pane active"><br>
                            <input type="hidden" id="id" class="form-control" name="id" value="<?php echo e($data->id); ?>">
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="title" value="<?php echo e($data->title); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keywords" class="col-sm-2 col-form-label">Keyword</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="keywords"
                                           value="<?php echo e($data->keywords); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="description"
                                           value="<?php echo e($data->description); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="company" class="col-sm-2 col-form-label">Company</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="company" value="<?php echo e($data->company); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="address" value="<?php echo e($data->address); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="phone" value="<?php echo e($data->phone); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fax" class="col-sm-2 col-form-label">Fax</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="fax" value="<?php echo e($data->fax); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" value="<?php echo e($data->email); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" name="icon">
                                </div>
                            </div>
                        </div>
                        <div id="smtp" class="container tab-pane fade"><br>
                            <div class="row mb-3">
                                <label for="smtpserver" class="col-sm-2 col-form-label">Smtpserver</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="smtpserver"
                                           value="<?php echo e($data->smtpserver); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="smtpemail" class="col-sm-2 col-form-label">Smtpemail</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="smtpemail"
                                           value="<?php echo e($data->smtpemail); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="smtppassword" class="col-sm-2 col-form-label">Smtppassword</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="smtppassword"
                                           value="<?php echo e($data->smtppassword); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="smtpport" class="col-sm-2 col-form-label">Smtpport</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="smtpport" value="<?php echo e($data->smtpport); ?>">
                                </div>
                            </div>
                        </div>
                        <div id="social" class="container tab-pane fade"><br>
                            <div class="row mb-3">
                                <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="facebook" value="<?php echo e($data->facebook); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="instagram"
                                           value="<?php echo e($data->instagram); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="twitter" value="<?php echo e($data->twitter); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="youtube" class="col-sm-2 col-form-label">Youtube</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="youtube" value="<?php echo e($data->youtube); ?>">
                                </div>
                            </div>
                        </div>
                        <div id="about" class="container tab-pane fade"><br>
                            <div class="row mb-3">
                                <label for="about" class="col-sm-2 col-form-label">About</label>
                                <div class="col-sm-8">
                                <textarea name="aboutus" id="abouttext" class="form-control">
                                        <?php echo e($data->aboutus); ?>

                                </textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#abouttext'))
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
                        <div id="contact" class="container tab-pane fade"><br>
                            <div class="row mb-3">
                                <label for="contacttext" class="col-sm-2 col-form-label">Contact</label>
                                <div class="col-sm-8">
                                <textarea name="contact" id="contacttext" class="form-control">
                                        <?php echo e($data->contact); ?>

                                </textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#contacttext'))
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
                        <div id="referances" class="container tab-pane fade"><br>
                            <div class="row mb-3">
                                <label for="referances" class="col-sm-2 col-form-label">Referances</label>
                                <div class="col-sm-8">
                        <textarea name="references" id="referancestext" class="form-control">
                                <?php echo e($data->references); ?>

                        </textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#referancestext'))
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
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('foot'); ?>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function () {
            $('.textarea').summernote()
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/setting.blade.php ENDPATH**/ ?>