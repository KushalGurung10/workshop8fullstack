

<?php $__env->startSection('title', 'Employee Profile'); ?>

<?php $__env->startSection('content'); ?>
<h3>Employee Profile</h3>

<p><strong>Name:</strong> <?php echo e($employee['name'] ?? 'N/A'); ?></p>
<p><strong>Job Title:</strong> <?php echo e($employee['title'] ?? 'N/A'); ?></p>
<p><strong>Skills:</strong></p>
<ul>
    <?php if(!empty($employee['skills'])): ?>
        <?php $__currentLoopData = explode(',', $employee['skills']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e(trim($skill)); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <li>No skills listed</li>
    <?php endif; ?>
</ul>

<a href="index.php">Back to Employee List</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\week8\workshop8\app\views/profile.blade.php ENDPATH**/ ?>