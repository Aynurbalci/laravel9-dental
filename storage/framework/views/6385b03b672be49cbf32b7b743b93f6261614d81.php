<?php $__env->startSection('title', 'User Processes List'); ?>

<?php $__env->startSection('content'); ?>

    <a href="<?php echo e(route('home')); ?>" class="font-raguler">Home </a><a href="<?php echo e(route('contact')); ?>"> |
        User Processes</a>
    <nav id="mainnav" class="mainnav">

        <ul class="menu">

            <li class="col-md-2">
                <a href="http://127.0.0.1:8001" title="">User Menu</a>
                <?php echo $__env->make('home.user.usermenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </li>
            <li class="col-md-9">
                <a href="http://127.0.0.1:8001/about" title="">User Processes List</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>

                        <th>Name & Surname</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Status</th>

                        <th>Cancel</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($rs->id); ?></td>


                            <td><?php echo e($rs->name); ?></td>
                            <td><?php echo e($rs->phone); ?></td>
                            <td><?php echo e($rs->email); ?></td>
                            <td><?php echo e($rs->adress); ?></td>

                            <td><?php echo e($rs->status); ?></td>

                            <td><button type="button" class="btn2"><a

                                   href="<?php echo e(route('userpanel.processdetail', ['id' => $rs->id])); ?>"
                                 >Show Detail</a></button></td>

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



<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/user/processes.blade.php ENDPATH**/ ?>