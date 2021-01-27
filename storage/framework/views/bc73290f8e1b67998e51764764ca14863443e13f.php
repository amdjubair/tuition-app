<?php $__env->startSection('content'); ?>

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

                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">
                            Institute:</label>
                               <div class="col-md-6">
                                  <select  name="institute" size="2" multiple ="multiple" class="form-control" required>
                                    <option value="SUST" selected="selected">SUST</option>
                                    <option value="DU" >DU</option>
                                    <option value="BUET" selected="selected">BUET</option>
                                  </select>     
                                </div>
                         </div>

                         <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">Classes:</label>
                               <div class="col-md-6">
                                  <select  name="class" size="2" multiple ="multiple" class="form-control" required>
                                    <option value="8" selected="selected">8</option>
                                    <option value="9" >9</option>

                                  </select>     
                                </div>
                         </div>

                         


                          <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"  multiple="multiple">Subjects:</label>
                        
                            <div class="multiselect col-md-6">
                              <div class="selectBox" onclick="showCheckboxes()" >
                                <select >
                                  <option>Choose Subjects</option>
                                </select>
                                 <div class="overSelect"></div>
                            </div>
                              <div id="subject" >
                                <label for="one">
                                  <input type="checkbox" id="one" name="subject" value="Physics" />Physics</label>
                                <label for="two">
                                  <input type="checkbox" id="two" name="subject"  value="Chemistry" />Chemistry</label>
                                <label for="three">
                                  <input type="checkbox" id="three" name="subject" />Higher Math</label>
                              </div>
                           </div>
                         </div>
                        
                         <div class="form-group row">
                            <label for="payment" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Payment')); ?></label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="payment"  required>
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
<script>
var expanded = false;

function showCheckboxes() {
  var subject = document.getElementById("subject");
  if (!expanded) {
    subject.style.display = "block";
    expanded = true;
  } else {
    subject.style.display = "none";
    expanded = false;
  }
}
</script>

</body>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/createPost.blade.php ENDPATH**/ ?>