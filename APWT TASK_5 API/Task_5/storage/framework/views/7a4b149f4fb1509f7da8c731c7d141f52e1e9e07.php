
<?php $__env->startSection('content'); ?>
<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Action</th>
    </tr>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($product->name); ?></td>
        <td><?php echo e($product->id); ?></td>
        <td><a class="text-decoration-none text-white bg-secondary p-1 m-3 rounded" href="/productEdit/<?php echo e($product->name); ?>/<?php echo e($product->id); ?>">Details</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Advance_Web_task2\APWT TASK_2\Task_2\resources\views/product/productList.blade.php ENDPATH**/ ?>