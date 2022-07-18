
<?php $__env->startSection('content'); ?>
<h1>Admin Panel</h1>
    
<h3>Admin Phone no:</h3> <?php if(Session::get('user')): ?> <?php echo e(Session::get('user')); ?> 
  <br> 
<h2>Add User</h2>
<form action="<?php echo e(route('adminDash')); ?>" class="form-group" method="post">
    <?php echo e(csrf_field()); ?>


    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="<?php echo e(old('name')); ?>"  class="form-control">
    </div>
    <br>
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="<?php echo e(old('email')); ?>"  class="form-control">
    </div>
    <br>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="<?php echo e(old('phone')); ?>"  class="form-control">
    </div>
    <br>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="password" value="<?php echo e(old('password')); ?>" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary mt-2" value="Add">

</form><br>
    <a class="btn btn-primary" href="<?php echo e(route('userList')); ?>">User List</a>

    <a class="btn btn-primary" href="<?php echo e(route('adminProfile')); ?>">Profile </a>

       <a class="btn btn-danger" href="<?php echo e(route('adminLogout')); ?>">Log out </a>
    <?php endif; ?> 
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Advance_Web_task2\APWT TASK_3\Task_3\resources\views/adminDash.blade.php ENDPATH**/ ?>