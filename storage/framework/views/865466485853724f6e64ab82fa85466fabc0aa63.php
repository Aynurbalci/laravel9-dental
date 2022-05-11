<?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul class="active menu-item-has-children">
    <?php if(count($subcategory->children)): ?>
        <li style="color:lightskyblue; font-family:'Arial Black' "> <?php echo e($subcategory->title); ?></li>
        <ul class="active menu-item-has-children">
            <?php echo $__env->make('home.categorytree',['children'=>$subcategory->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </ul>
    <hr>
    <?php else: ?>
    <li><a href="<?php echo e(route('categorytreatments',['id'=>$subcategory->id,'slug'=>$subcategory->title] )); ?>"><?php echo e($subcategory->title); ?></a></li>
    <?php endif; ?>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/home/categorytree.blade.php ENDPATH**/ ?>