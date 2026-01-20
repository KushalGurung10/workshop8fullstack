

<?php $__env->startSection('title', 'Employee Database'); ?>

<?php $__env->startSection('content'); ?>
<h3>Employee List</h3>

<!-- Only Add + inside the list -->
<a class="btn" href="index.php?action=create">Add +</a>

<ul>
<?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <strong><?php echo e($e['name']); ?></strong> – <?php echo e($e['title']); ?>


        <ul>
            <?php $__currentLoopData = explode(',', $e['skills']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e(trim($skill)); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <a class="btn" href="index.php?action=show&id=<?php echo e($e['id']); ?>">View Profile</a>
        <a class="btn" href="index.php?action=edit&id=<?php echo e($e['id']); ?>">Edit</a>
        <a class="btn" href="index.php?action=delete&id=<?php echo e($e['id']); ?>">Delete</a>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\week8\workshop8\app\views/employee/index.blade.php ENDPATH**/ ?>