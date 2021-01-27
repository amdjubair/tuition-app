<?php $__env->startSection('content'); ?>
<div class="container banner-content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cotact" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contact')); ?></label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" required>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"   >Tutor/Student's Institute:</label>
                               <div class="col-md-6">
                                  <select  name="institute" class="form-control" required="required" >
                                    <option value="SUST" >SUST</option>
                                    <option value="DU" >DU</option>
                                    <option value="BUTEX" >BUTEX</option>
                                    <option value="JU" >JU</option>
                                    <option value="JNU" >JNU</option>
                                    <option value="KUET" >KUET</option>
                                    <option value="RUET" >RUET</option>
                                    <option value="CUET" >CUET</option>
                                    <option value="IUT" >IUT</option>
                                    <option value="MIST" >MIST</option>
                                    <option value="BAU" >BAU</option>
                                    <option value="Blue-bird" >Blue-bird</option>
                                    <option value="ScholarsHome" >ScholarsHome</option>
                                      <option value="Sylhet Govt Pilot" >Sylhet Govt Pilot</option>
                                        <option value="MC College" >MC College</option>


                                  </select>     
                                </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-md-4 col-form-label text-md-right">class:</label>
                             <div class="col-md-6">
                               <select id='class' class="form-control" name="class[]"  required="required" multiple="multiple" >
                                    <option value='8'>8</option>
                                    <option value='9'>9</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                    <option value='12'>12</option>
                                  </select>
                             </div>
                         </div>

                         <div class="form-group row">
                             <label class="col-md-4 col-form-label text-md-right"  >Subjects:</label>
                               <div class="col-md-6">
                                  <select id='subject' name='subject[]' multiple class="form-control" required="required" >
  
                                      <option value='Physics'>Physics</option>
                                    
                                      <option value='Chemistry'>Chemistry</option>
                                    
                                      <option value='Math'>Math</option>
                                      <option value='Biology'>Biology</option>
                                    
                                      <option value='Ict'>ICT</option>
                                    
                                      <option value='English'>English</option>
                                    
                                  </select>
                                </div>
                            </div>

                             <label for="alert" class="col-md-9 col-form-label text-md-right"><?php echo e(__('Note: press ctrl button to select mutiple subjects and classes')); ?></label>

                            <div class="col-md-6">
                                
                            </div>

                         <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right"><?php echo e(__('SignUp as: ')); ?></label>

                            <div class="col-md-6">
                                <select   class="form-control" name="user_type"  required />
                                    <option value="">select user type</option>
                                       <option value="Tutor">Tutor</option>
                                          <option value="Guardian">Guardian</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                                 <button type="submit" class="btn btn-primary">
                                   <a href="<?php echo e(route('login')); ?>" style="color: ghostwhite" > <?php echo e(__('Go to Login')); ?></a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/auth/register.blade.php ENDPATH**/ ?>