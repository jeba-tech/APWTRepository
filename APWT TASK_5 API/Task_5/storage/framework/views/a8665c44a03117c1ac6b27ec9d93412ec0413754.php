
<?php $__env->startSection('content'); ?>
<h1>Welcome </h1>
<h3>Name</h3><?php if(Session::get('user')): ?> <?php echo e(Session::get('user')); ?> 
<br><br>
   
    <a class="btn btn-primary" href="<?php echo e(route('customerProfile')); ?>">Profile </a>
    <a class="btn btn-primary" href="<?php echo e(route('userEdit')); ?>">Edit Profile </a>

       <a class="btn btn-danger" href="<?php echo e(route('logout')); ?>">Log out </a>
    <?php endif; ?> 
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Advance_Web_task2\APWT TASK_3.4\Task_3.4\resources\views/product/customerDash.blade.php ENDPATH**/ ?>