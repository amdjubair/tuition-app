<!DOCTYPE html>
<html>
 <head>
  <title>Bootstrap Multi Select Dynamic Dependent Select box using PHP Ajax </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Multi Select Dynamic Dependent Select box using PHP Ajax</h2>
   <br /><br />
   <div style="width: 500px; margin:0 auto">
    <div class="form-group">
     <label>First Level Category</label><br />
     <select id="first_level" name="first_level[]" multiple class="form-control">
       <option value='8'>8</option>
                                    <option value='9'>9</option>
                                    <option value='10'>10</option>
                                    <option value='11'>11</option>
                                    <option value='12'>12</option>
     </select>
    </div>
    <div class="form-group">
     <label>Second Level Category</label><br />
     <select id="second_level" name="second_level[]" multiple class="form-control">

     </select>
    </div>
    <div class="form-group">
     <label>Third Level Category</label><br />
     <select id="third_level" name="third_level[]" multiple class="form-control">

     </select>
    </div>
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 $('#first_level').multiselect({
  nonSelectedText:'Select First Level Category',
  buttonWidth:'400px',
  onChange:function(option, checked){
  
   
   var selected = this.$select.vals();
   if(selected.length > 0)
   {
    $.ajax({
     data:{selected:selected},
     success:function(data)
     {
      
     }
    })
   }
  }
 });

 

});
</script><?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views//test.blade.php ENDPATH**/ ?>