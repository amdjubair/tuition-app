<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Create Tuition Post ')); ?></div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>" >
                        <?php echo csrf_field(); ?>

                        

                         <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">
                            Institute:</label>
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
                            <label for="payment" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Payment')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="Payment" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="days" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Days Per Week')); ?></label>

                            <div class="col-md-6">
                                <input id="days" type="text-md-right" class="form-control" name="days" >
                            </div>
                        </div>

                         <div class="form-group row">
                            <label name="Address" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>

                             <div class="col-md-6">
                                <textarea></textarea>
                                   
                                </div>

                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contact No')); ?></label>

                            <div class="col-md-6">
                                <input id="contact" type="text-md-right" class="form-control" name="Payment" >
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('CreatePost')); ?>

                                </button>
                            </div>
                        </div>


                     

                        
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/posts.blade.php ENDPATH**/ ?>