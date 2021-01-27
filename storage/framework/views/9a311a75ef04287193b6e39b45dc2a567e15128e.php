<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <li><a href="/task/<?php echo e($task->id); ?>"> <?php echo e($task->body); ?> </a></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/tasks/index.blade.php ENDPATH**/ ?>