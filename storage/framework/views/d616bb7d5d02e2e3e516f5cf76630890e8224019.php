
<?php echo e(Form::open(['action'=>'adminHobbyController@store'])); ?>

    <div class="form-group">

	 <label for="art" class="checkbox-inline">
	  <?php echo e(Form::checkbox('hobby[]','art')); ?>Art
	 </label>
	 <label for="artitecture" class="checkbox-inline">        
	   <?php echo e(Form::checkbox('hobby[]','artitecture')); ?>Artitecture
	 </label>
	 <label for="business" class="checkbox-inline">
	   <?php echo e(Form::checkbox('hobby[]','business')); ?>Business
	  </label>
	          ...
	  <div class="form-group">
	    <?php echo e(Form::submit('ADD',['class'=>'form-control'])); ?> 
	  </div>


<?php echo e(Form::close()); ?>


<?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/post/profilepage.blade.php ENDPATH**/ ?>