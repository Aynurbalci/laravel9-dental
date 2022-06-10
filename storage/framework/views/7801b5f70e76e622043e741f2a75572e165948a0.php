<?php $__env->startSection('title', 'User Comments & REviews'); ?>

<?php $__env->startSection('content'); ?>

    <a href="<?php echo e(route('home')); ?>" class="font-raguler">Home </a><a href="<?php echo e(route('contact')); ?>"> |
        User Comment</a>
    <nav id="mainnav" class="mainnav">

        <ul class="menu">

            <li class="col-md-2">
                <a href="http://127.0.0.1:8001" title="">User Menu</a>
                <?php echo $__env->make('home.user.usermenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </li>
            <li class="col-md-9">
                <a href="http://127.0.0.1:8001/about" title="">User Comments & Reviews</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>

                        <th>Treatment</th>
                        <th>Subject</th>
                        <th>Reviews</th>
                        <th>Rate</th>
                        <th>Status</th>

                        <th>Delete</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($rs->id); ?></td>

                          
                            <td><a href="<?php echo e(route('treatment',['id'=>$rs->treatment_id])); ?>"><?php echo e($rs->treatment->title); ?></a></td>
                            <td><?php echo e($rs->subject); ?></td>
                            <td><?php echo e($rs->review); ?></td>
                            <td><?php echo e($rs->rate); ?></td>

                            <td><?php echo e($rs->status); ?></td>

                            <td><a class="btn btn-inverse-danger btn-fw"
                                   href="<?php echo e(route('userpanel.reviewdestroy', ['id' => $rs->id])); ?>"
                                   onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </li>



        </ul>

    </nav>




    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/user/comments.blade.php ENDPATH**/ ?>