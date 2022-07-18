
<?php $__env->startSection('content'); ?>

<h1>Profile</h1>

<div>
<h1 >Phone number:  <?php if(Session::get('user')): ?> <?php echo e(Session::get('user')); ?> 
<?php endif; ?></h1><br>

</h1><br>


</div>


<img src="<?php echo e(URL::to('/images/Customer.png')); ?>" style="max-width:10%;">

<h2>Hellow admin .Welcome to your profile</h2>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Advance_Web_task2\APWT TASK_3\Task_3\resources\views/adminProfile.blade.php ENDPATH**/ ?>