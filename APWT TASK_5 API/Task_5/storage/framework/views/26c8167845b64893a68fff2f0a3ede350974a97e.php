<html>
    <head>
        <title>Product App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    </head>
    <body class="bg-success text-dark bg-opacity-25 m-5">
          <?php echo $__env->make('inc.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="m-5 container bg-success p-5 rounded text-dark bg-opacity-25">
           
            <div class="ms-5 p-3">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        
    </body>
</html><?php /**PATH C:\xampp\htdocs\Advance_Web_task2\APWT TASK_3.4\Task_3.4\resources\views/layouts/app.blade.php ENDPATH**/ ?>