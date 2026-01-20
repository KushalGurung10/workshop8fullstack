

<?php $__env->startSection('title', 'Welcome'); ?>

<?php $__env->startSection('content'); ?>
<p>Welcome to the Employee Management System.</p>


<a class="btn" href="index.php?action=index">Employee List</a>
<a class="btn" href="index.php?action=create">Add Employee</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\week8\workshop8\app\views/home.blade.php ENDPATH**/ ?>