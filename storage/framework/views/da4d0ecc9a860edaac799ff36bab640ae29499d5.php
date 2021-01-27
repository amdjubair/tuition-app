<?php $__env->startSection('content'); ?>



  <li><?php echo e($task->id); ?></li>
  <li><?php echo e($task->title); ?></li>
  <li><?php echo e($task->body); ?></li>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/tasks/show.blade.php ENDPATH**/ ?>