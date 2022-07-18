
<?php $__env->startSection('content'); ?>

<h1>Welcome to your profile <?php echo e($name); ?></h1>
<p>ID: <?php echo e($id); ?></p>
<p>DOB: <?php echo e($dob); ?></p>

<h2>Friends</h2>
<?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($n); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Advance_Web_task2\APWT TASK_3.4\Task_3.4\resources\views/profile.blade.php ENDPATH**/ ?>