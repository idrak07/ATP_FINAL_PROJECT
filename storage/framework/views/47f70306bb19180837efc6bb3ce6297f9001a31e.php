<!DOCTYPE html>
<html>
<head>
	<title>password update page</title>
</head>
<body>
   <a href="/logout"><b>Logout</br></a>
	<h1><center> Enter New password</center></h1>
	  
	
	<form method="post" >
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <center>
	<table border="2" height="200" width="150">
    <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                  Password 
                    </b>
                    </center>
                    
                    </br></td>     
                    <a href="/logout"><b><br>Logout</br></a>           
               </tr>
                <tr>
                    <td> New Password:</td>
                    <td><input  type="password" name=newpassword></td>
                    <td><?php echo e($errors->first('newpassword')); ?></td>
                </tr>
                
              <tr>
                    <td> Repeat Password:</td>
                    <td><input  type="password" name=repeatnewpassword></td>
                    <td><?php echo e($errors->first('repeatnewpassword')); ?></td>
                </tr>
               
              
              
		
		<tr>
            <td colspan="2">
              
                <center>
                <b>
                <input type="submit" name="submit" value="Confirm"></td>
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
</html><?php /**PATH C:\Users\Asus\Desktop\Scholarship\resources\views/organization/confirmpassword.blade.php ENDPATH**/ ?>