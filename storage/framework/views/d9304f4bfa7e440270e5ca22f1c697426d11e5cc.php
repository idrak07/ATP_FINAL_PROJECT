<!DOCTYPE html>
<html>
<head>
	<title>update address page</title>
</head>
<body>
   <a href="/logout"><b>Logout</br></a>
	<h1><center> Update  Address Information</center></h1>
	  
	
	<form method="post" >
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <center>
	<table border="2" height="350" width="300">
    <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                   Address Information
                    </b>
                    </center>
                    
                    </br></td>
                    <a href="/logout"><b><br>Logout</br></a>
                
            </tr>
       <tr>
			<td>Address line:</td>
			<td><input type="text" name="addressline" value="<?php echo e($organization['addressline']); ?>"></td>
            <td><?php echo e($errors->first('addressline')); ?></td>
		</tr>
        <tr>
			<td>City:</td>
			<td><input type="text" name="city" value="<?php echo e($organization['city']); ?>"></td>
            <td><?php echo e($errors->first('city')); ?></td>
		</tr>
        <tr>
                  <td>Country :</td>
                    <td>
                        <select name="country" value="<?php echo e($organization['country']); ?>">
                            <option value=<?php echo e($organization['country']); ?>><?php echo e($organization['country']); ?></option>
                            <option value=" Bangladesh"> Bangladesh</option>
                            <option value="India">India</option>
                            <option value=" Indonesia"> Indonesia</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="China">China</option>
                            <option value="Russia">Russia</option>
                            <option value="Japan">Japan</option>
                            <option value="Iran">Iran</option>
                        </select>
                    </td>
                    <td><?php echo e($errors->first('country')); ?></td>
                    </tr>
		
		<tr>
            <td colspan="2">
              
                <center>
                <b>
                <input type="submit" name="submit" value="update"></td>
                </b>
                </center>
                </td>
		</tr>
        
		<tr>
            <td colspan="2">
                
                <center>
                <b>
                <a href="<?php echo e(route('organization.profile')); ?>">Back</a>  

                </b>
                </center>
                </td>
		</tr>
	</table>
    </center>
</form>

</body>
</html><?php /**PATH C:\Users\Asus\Desktop\Scholarship\resources\views/organization/address.blade.php ENDPATH**/ ?>