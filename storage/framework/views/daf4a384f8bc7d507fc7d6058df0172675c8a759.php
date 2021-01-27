<?php $__env->startSection('content'); ?>


<!-- bootstrap linker -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<!-- end linker -->

<body>
  

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header"><?php echo e(__('Create Tuition Post ')); ?></div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(url('storePost')); ?>" >
                        <?php echo csrf_field(); ?>

                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"   required="required">Students/Tutor's Institute:</label>
                               <div class="col-md-6">
                                  <select  name="institute" class="form-control"  >
                                    <option value="SUST" >SUST</option>
                                    <option value="DU" >DU</option>
                                     <option value="DU" >BUET</option>
                                    <option value="BUTEX" >BUTEX</option>
                                     <option value="DU" >CU</option>
                                    <option value="JU" >JU</option>
                                     <option value="DU" >RU</option>
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
                             <label class="col-md-4 col-form-label text-md-right">Class:</label>
                             <div class="col-md-6">
                               <select id='class' class="form-control" name="class[]" multiple  required="required">
                                    <option value='6' >6</option>
                                    <option value='8'>7</option>
                                    <option value='8'>8</option>
                                    <option value='9' selected="selected">9</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                    <option value='12' >12</option>
                                    <option value='admission test'>admission test</option>
                                  </select>
                             </div>
                         </div>
                            <div class="form-group-row">
                               
                            </div>

                          <div class="form-group row">
                             <label class="col-md-4 col-form-label text-md-right"  >Subjects:</label>
                               <div class="col-md-6">
                                  <select id='subject' name='subject[]' multiple class="form-control" required="required" >
                                      <option value='Physics' selected="selected">Physics</option>
                                      <option value='Chemistry'>Chemistry</option>
                                      <option value='Biology'>Biology</option>
                                      <option value='Higher Math'>HigherMath</option>
                                      <option value='Math'>General Math</option>
                                      <option value='Ict'>ICT</option>
                                      <option value='English'>English</option>
                                    
                                  </select>
                                </div>

                               
                            </div>

                             <label for="alert" class="col-md-9 col-form-label text-md-right"><?php echo e(__('Note: press ctrl button to select mutiple')); ?></label>

                            <div class="col-md-6">
                                
                            </div>
                        
                         <div class="form-group row">
                            <label for="payment" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Payment')); ?></label>

                            <div class="col-md-6">
                                <select id="text" type="text" class="form-control" name="payment" id=""  required>
                                     <option value='3000'>3000</option>
                                      <option value='3000'>3500</option>
                                      <option value='3000'>4000</option>
                                      <option value='3000'>4500</option>
                                      <option value='3000'>5000</option>
                                      <option value='3000'>5500</option>
                                      <option value='3000'>6000</option>
                                      <option value='3000'>6500</option>
                                      <option value='3000'>7000</option>
                                      <option value='3000'>7500</option>
                                      <option value='3000'>8000</option>
                                      <option value='3000'>8500</option>
                                      <option value='3000'>9000</option>
                                      <option value='3000'>9500</option>
                                      <option value='3000'>10000</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="days" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Days Per Week')); ?></label>

                            <div class="col-md-6">
                                <input id="days" type="text-md-right" class="form-control" name="days" required >
                            </div>
                        </div>

                         <div class="form-group row">
                            <label name="addr" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Address')); ?></label>

                             <div class="col-md-6">
                                <textarea name="address" type="text" required>   
                                </textarea>      
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="joiningdate" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Joining Date')); ?></label>

                            <div class="col-md-6">
                                <input id="joiningdate" type="date" class="form-control" name="joiningdate" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contact No')); ?></label>

                            <div class="col-md-6">
                                <input id="contact" type="text-md-right" class="form-control" name="contact" required >
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



<script type="text/javascript">
 $('select').selectpicker(); 
</script>
</body>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/post/createPost.blade.php ENDPATH**/ ?>