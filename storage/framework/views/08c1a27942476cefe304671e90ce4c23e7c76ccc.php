<!DOCTYPE html>
<html>
<head>
	<title>userinformation</title>
</head>
<body>
	<h1>UserInformation</h1>
	<?php $__currentLoopData = $userinfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li>name:  <?php echo $user->name ?>  </li><br>
	<li>contact:  <?php echo $user->contact?>  </li><br>
	<li>institute:  <?php echo $user->institute ?>  </li><br>
	<hr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html>
<?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/showUser.blade.php ENDPATH**/ ?>