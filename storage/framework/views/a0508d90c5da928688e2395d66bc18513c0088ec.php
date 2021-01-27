<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b><?php echo e(__('Profile')); ?></b></div>
                <div class="card-body">
                   
                      

                        <div class="form-group row">
                            <label name="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                             <div class="col-md-4 list-group-item">
                                
                                <?php echo e($user->name); ?>

                                </div>

                          </div>

                          <div class="form-group row">
                            <label name="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Institute')); ?></label>

                             <div class="col-md-4 list-group-item">
                                
                                <?php echo e($user->institute); ?>

                                </div>

                          </div>

                        <div class="form-group row">
                            <label name="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Email')); ?></label>

                             <div class="col-md-6">
                               <a href="mailto:<?php echo e($user->email); ?>"> <?php echo e($user->email); ?></a>
                                </div>

                        </div>

                        <div class="form-group row">
                            <label name="Address" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>

                             <div class="col-md-6">
                                <?php echo e($user->address); ?> 
                                   
                                </div>

                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contact No')); ?></label>

                            <div class="col-md-6">
                                <?php echo e($user->contact); ?>

                            </div>
                        </div>

                        


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Edit')); ?>

                                </button>
                                 <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Update')); ?>

                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Delete')); ?>

                                </button>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/profile.blade.php ENDPATH**/ ?>