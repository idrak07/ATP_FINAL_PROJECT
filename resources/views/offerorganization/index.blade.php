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
            {{csrf_field()}}
            <table border="1" height="500" width="400">
                <tr>
                    <td>Title:</td>
                    <td><input type="text"  name="title"  value="{{old('title')}}"></td>
                    <td>{{ $errors->first('title') }}</td>
                </tr>
                
                <tr> 
                <td>Description:</td>
                   <td>
                   <textarea name="description" placeholder="Description" value="{{old('description')}}"></textarea>
                   </td>  
                   <td>{{ $errors->first('description') }}</td>
                                     
                 </tr>
                 <td>Degree :</td>
                    <td>
                           <select name="degree" value="{{old('degree')}}">
                            <option value="">Select Degree</option>
                            <option value="Bachelor">Bachelor/Equivalent</option>
                            <option value="Masters">Masters/Equivalent</option>
                            <option value="PHD">PHD</option>
                            
                        </select>
                    </td>
                    <td>{{ $errors->first('degree') }}</td>
                    </tr>
                    <tr>
                 <td>Apply Date :</td>
                <td><input type="date"id="sdate" name="startdate"  value="{{old('startdate')}}"></td>
                <td>{{ $errors->first('startdate') }}</td>
                 </tr>
                <tr>
                <td> Application Deadline :</td>
                <td><input type="date"id="ddate" name="deadline"  value="{{old('deadline')}}"></td>
                <td>{{ $errors->first('deadline') }}</td>
                </tr>
                <tr>
                <td>Percentage :</td>
                <td>
                        <select name="percentage" value="{{old('percentage')}}">
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
                    <td>{{ $errors->first('percentage') }}</td>
                </tr>
                    
                  <tr>
                    <td>University:</td>
                    <td>
                    <select name="name">
                    <?php $__currentLoopData = $name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select></td>
                    <td>{{ $errors->first('university') }}</td>
                </tr>
                         
                 
                    
                <tr>
                    <td>Total Seat:</td>
                    <td><input type="text" name="totalseat"  value="{{old('totalseat')}}"></td>
                    <td>{{ $errors->first('totalseat') }}</td>
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
                <a href="{{route('organization.index')}}">Back</a>  

                </b>
                </center>
                </td>
		</tr>
            </table>
            </form>
    </center>
	

</body>
</html>