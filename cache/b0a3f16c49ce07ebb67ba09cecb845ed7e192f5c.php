<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', 'Welcome'); ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        a { text-decoration: none; color: white; }
        a:hover { text-decoration: underline; }
        .btn { background-color: #007BFF; color: white; padding: 5px 10px; border-radius: 5px; display: inline-block; margin-bottom: 10px; }
        ul { list-style: none; padding-left: 0; }
        li { margin-bottom: 10px; }
        li ul { margin-left: 20px; list-style: disc; }
    </style>
</head>
<body>

<h2>Simple Employee CRUD</h2>

<hr>

<?php echo $__env->yieldContent('content'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\week8\workshop8\app\views/layout.blade.php ENDPATH**/ ?>