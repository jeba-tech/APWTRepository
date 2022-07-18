
<?php $__env->startSection('content'); ?>

<h1>Profile</h1>
<h3>Name</h3><?php if(Session::get('user')): ?> <?php echo e(Session::get('user')); ?> 

<img src="<?php echo e(URL::to('/images/Customer.png')); ?>" style="max-width:10%;">

<h2>Welcome to your profile</h2>
<?php endif; ?> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Advance_Web_task2\APWT TASK_3\Task_3\resources\views/customerProfile.blade.php ENDPATH**/ ?>