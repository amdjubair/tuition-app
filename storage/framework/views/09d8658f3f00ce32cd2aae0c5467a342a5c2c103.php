<div class="col-md-6">
  <div class="card flex-md-row mb-4 box-shadow h-md-250">
    <div class="card-body d-flex flex-column ">
      <div style="background-color:#084C93;">
      

      <?php if($post->user->user_type=="Tutor"): ?>
          <strong> <a style="font-size: 28px;color: cornflowerblue"> <?php echo e("Tuition Wanted ::::"); ?></a></strong>
      <?php endif; ?>

      <?php if($post->user->user_type=="Guardian"): ?>
           <strong> <a style="font-size: 28px;color: cornflowerblue  "> <?php echo e("Tutor Wanted :::: "); ?></a></strong>
      <?php endif; ?>

      


      <strong class="d-inline-block mb-2 text-primary"><a style="font-size: 28px">Post No:<?php echo e($post->id); ?></a></strong>
      
      <h5 class="mb-0">
        <a style="color:ghostwhite">Location: <?php echo e($post->address); ?></a>
      </h5><br>

    
      
        
        <ul><h5>
          <li ><a href="/profile/<?php echo e($post->user->id); ?>" style="color: ghostwhite"><?php echo e($post->user->name); ?></a>  </li><br>
          <li style="color:ghostwhite">Posted at: <?php echo e($post->created_at->toDayDateTimeString()); ?></li><br>
          <li style="color:ghostwhite">Tutor institute: <?php echo e($post->institute); ?></li><br>
          <li style="color:ghostwhite">Class: <?php echo e($post->class); ?></li>
        </h5>
        </ul>
      <a href="/post/<?php echo e($post->id); ?>" style="font-size: 25px;color:ghostwhite"><button style="background-color: cornflowerblue;">Click to see full post</button></a>
      </div>
    </div>
  </div>
</div>
<?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/layouts/postbody.blade.php ENDPATH**/ ?>