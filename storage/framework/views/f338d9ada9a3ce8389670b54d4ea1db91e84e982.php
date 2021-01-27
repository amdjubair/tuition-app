<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Create Tuition Post ')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('index')); ?>" >
                        <?php echo csrf_field(); ?>

                        

                         <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">institute:</label>
                               <div class="col-md-6">
                                  <select  name="institute" size="2" multiple ="multiple">
                                    <option value="SUST" selected="selected">SUST</option>
                                    <option value="DU" >DU</option>
                                    <option value="BUET" selected="selected">BUET</option>
                                  </select>     
                                </div>
                         </div>

                         <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">Classes:</label>
                               <div class="col-md-6">
                                  <select  name="institute" size="2" multiple ="multiple">
                                    <option value="8" selected="selected">8</option>
                                    <option value="9" >9</option>

                                  </select>     
                                </div>
                         </div>

                         <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">Subjects:</label>
                               <div class="col-md-6">
                                  <select  name="institute" size="2" multiple ="multiple">
                                    <option value="physics" selected="selected">Physics</option>
                                    <option value="Chemistry" >Chemistry</option>
                                    <option value="Biology" selected="selected">Biology</option>
                                    <option value="Higher Math" selected="selected">Higher Math</option>
                                  </select>     
                                </div>
                         </div>

                         <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contact')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                     <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/post.blade.php ENDPATH**/ ?>