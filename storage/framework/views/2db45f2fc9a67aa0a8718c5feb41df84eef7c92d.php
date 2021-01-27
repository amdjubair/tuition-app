<?php $__env->startSection('content'); ?>
<div style="background-color: ghostwhite">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div style="background-color: #F87005 ; ">
                <div class="card-header" style="font-size: 3rem ">
                  <?php if($post->user->user_type=='Tutor'): ?>
                      <a style="font-size: 28px;color:#080520;">Tuition Wanted ::::</a>
                  <?php endif; ?>
                  <?php if($post->user->user_type=='Gurdian'): ?>
                      <a style="font-size: 28px;color:#FF5733;">Tutor Wanted ::::</a>
                  <?php endif; ?>
                  <a style="font-size: 28px;color:#080520; text-align-last: ">PostNo:<?php echo e($post->id); ?></a>

                </div>
                </div>

                <div class="card-body">
                  <div >
                      <div>
                        <a href="/profile/<?php echo e($post->user->id); ?>"  style="font-size: 25px ;color:#080520">Posted By: <?php echo e($post->user->name); ?> </a>
                      </div>
                     <div >
                      <a style="font-size: 25px ;color:#080520">Location: <?php echo e($post->address); ?></a>
                     </div>
                    <div >
                        <a style="font-size: 25px;color:#080520">Institute: <?php echo e($post->institute); ?></a>
                    </div>
                     <div >
                        <a style="font-size: 25px;color:#080520">Classes: <?php echo e($post->class); ?></a>
                    </div>
                    <div >
                        <a style="font-size: 25px;color:#080520">Subjects: <?php echo e($post->subject); ?></a>
                    </div>
                    <div >
                        <a style="font-size: 25px;color:#080520">Payment: <?php echo e($post->payment); ?></a>
                    </div>
                     <div >
                        <a style="font-size: 25px;color:#080520">Contact: <?php echo e($post->contact); ?></a>
                    </div>
                   <button class="btn-btn-primary"><a href="/post" style="color:#080520;font-size:25" >back to post</a></button>
                  </div>
                  <strong >Comments:</strong>
                </div>
              </div>
              </div>

         <!-- show comment -->
            
             <div class="col-md-8">
               
                
                 <ul class="list-group ">
                    <?php $__currentLoopData = $post->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li class="list-group-item">
                        <a href="/profile/<?php echo e($comments->user->id); ?>"><?php echo e($comments->user['name']); ?> </a>
                       <a> <?php echo e($comments->body); ?></a>
                       <p>Commented at :<?php echo e($comments->created_at); ?></p>
                      </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                 </ul>
              
              </div>


               <!-- add comment -->
              <div class="col-md-8">
                <div class="card">
                  <div class="card-body">
                     <form action="/post/<?php echo e($post->id); ?>/comments">

                      <?php echo e(csrf_field()); ?>

                        <div id="comment" class="form-group">
                          <textarea name="body" class="form-control" >
                        
                          </textarea>
                           
                        </div>

                        <div class="form-group">
                          <button class="btn-btn-primary">comment</button>
                        </div>

                     </form>  
                    </div>
                  </div>
                </div>

        </div>

   </div>  
              
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/post/showPost.blade.php ENDPATH**/ ?>