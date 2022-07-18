
<?php $__env->startSection('content'); ?>

<table class="table table-border">
    <tr>
        <th class="fs-4">Name</th>
        <th class="fs-4">Phone</th>
        <th class="fs-4">Email</th>
        <th class="fs-4">id</th>
    </tr>
    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr >
            <td ><a class="text-decoration-none text-dark fs-4" href="/<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?></a></td>
            <td class="fs-4"><?php echo e($customer->phone); ?></td>
            <td class="fs-4"><?php echo e($customer->email); ?></td>
            <td class="fs-4"><?php echo e($customer->id); ?></td>
            <td><a class="text-decoration-none text-white bg-success p-1 m-3 rounded" href="/editUser/<?php echo e($customer->id); ?>">Edit</a></td>
            <td><a class="text-decoration-none text-white bg-dark p-1 m-3 rounded" href="/userDelete/<?php echo e($customer->id); ?>">Delete</a></td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Advance_Web_task2\APWT TASK_3\Task_3\resources\views/userList.blade.php ENDPATH**/ ?>