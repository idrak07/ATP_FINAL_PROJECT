<!DOCTYPE html>
<html>
<head>
    <title>offer page</title>
    <p>
       Date: <script> document.write(new Date().toLocaleDateString()); </script>
    </p>
</head>
<body>
    <center>
    <h1>Offer Scholarship</h1>
        <form method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <table border="1" height="500" width="400">
                <tr>
                    <td>Title:</td>
                    <td><input type="text"  name="title"  value="<?php echo e(old('title')); ?>"></td>
                    <td><?php echo e($errors->first('title')); ?></td>
                </tr>
                
                <tr> 
                <td>Description:</td>
                   <td>
                   <textarea name="description" placeholder="Description" value="<?php echo e(old('description')); ?>"></textarea>
                   </td>  
                   <td><?php echo e($errors->first('description')); ?></td>
                                     
                 </tr>
                 <td>Degree :</td>
                    <td>
                           <select name="degree" value="<?php echo e(old('degree')); ?>">
                            <option value="">Select Degree</option>
                            <option value="Bachelor">Bachelor/Equivalent</option>
                            <option value="Masters">Masters/Equivalent</option>
                            <option value="PHD">PHD</option>
                            
                        </select>
                    </td>
                    <td><?php echo e($errors->first('degree')); ?></td>
                    </tr>
                    <tr>
                 <td>Apply Date :</td>
                <td><input type="date"id="sdate" name="startdate"  value="<?php echo e(old('startdate')); ?>"></td>
                <td><?php echo e($errors->first('startdate')); ?></td>
                 </tr>
                <tr>
                <td> Application Deadline :</td>
                <td><input type="date"id="ddate" name="deadline"  value="<?php echo e(old('deadline')); ?>"></td>
                <td><?php echo e($errors->first('deadline')); ?></td>
                </tr>
                <tr>
                <td>Percentage :</td>
                <td>
                        <select name="percentage" value="<?php echo e(old('percentage')); ?>">
                            <option value="">Select Percentage</option>
                            <option value="40">30%</option>
                            <option value="50">50%</option>
                            <option value="60">60%</option>
                            <option value="70">70%</option>
                            <option value="80">80%</option>
                            <option value="90">90%</option>
                            <option value="100">100%</option>
                            
                        </select>
                    </td>
                    <td><?php echo e($errors->first('percentage')); ?></td>
                </tr>
                    
                  <tr>
                    <td>University:</td>
                    <td>
                    <select name="name">
                    <?php $__currentLoopData = $name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select></td>
                    <td><?php echo e($errors->first('university')); ?></td>
                </tr>
                         
                 
                    
                <tr>
                    <td>Total Seat:</td>
                    <td><input type="text" name="totalseat"  value="<?php echo e(old('totalseat')); ?>"></td>
                    <td><?php echo e($errors->first('totalseat')); ?></td>
                </tr>
                
                          
              
                <tr>
                    <td colspan="2">
                        <center>
                                <input type="submit" name="submit" value="OFFER">
                         </center>
                    </td>
                </tr>
                <tr>
            <td colspan="2">
                
                <center>
                <b>
                <a href="<?php echo e(route('organization.index')); ?>">Back</a>  

                </b>
                </center>
                </td>
		</tr>
            </table>
            </form>
    </center>
	

</body>
</html><?php /**PATH C:\Users\Asus\Desktop\Scholarship\resources\views/offerorganization/index.blade.php ENDPATH**/ ?>