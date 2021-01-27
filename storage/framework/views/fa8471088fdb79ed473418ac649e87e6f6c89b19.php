<?php $__env->startSection('content'); ?>

<div>
	<div class="col-md-9">All Tuition Post</div>
	<table class="table table-bordered table-info">
		<thead>
			<tr>
				<th>PostNo</th>
				<th>institute</th>
				<th>class</th>
				<th>subject</th>
				<th>payment</th>
				<th>days</th>
				<th>address</th>
				<th>contact</th>
			</tr>
		</thead>

		<tbody>
	    
		<tr>
			<td><?php echo $post->id ?>  </td>
			<td><?php echo $post->institute ?>  </td>
			<td><?php echo $post->class ?>  </td>
			<td><?php echo $post->subject ?>  </td>
			<td><?php echo $post->payment ?>  </td>
			<td><?php echo $post->days ?>  </td>
			<td><?php echo $post->address ?>  </td>
			<td><?php echo $post->contact ?>  </td>
		</tr>
	   
	   </tbody>
	</table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/showPost.blade.php ENDPATH**/ ?>