<!DOCTYPE html>
<html>
<head>
	<title>attachment update page</title>
</head>
<body>
   <a href="/logout"><b>Logout</br></a>
	<h1><center> Update  Attachment Information</center></h1>
	  
	
    <form method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <center>
	<table border="2"  height="400" width="300">
    <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                 Attachment Information
                    </b>
                    </center>
                    
                    </br></td>
                    <a href="/logout"><b><br>Logout</br></a>
                
            </tr>
            <tr>
                    <td> Government Approval:</td>
                    <td><input id = "repass" type="file" name="approval"></td>
                    <td><?php echo e($errors->first('approval')); ?></td>
                </tr>
                <tr>
                    <td> Background Information:</td>
                    <td><input id = "repass" type="file" name="information"></td>
                    <td><?php echo e($errors->first('information')); ?></td>
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
</html><?php /**PATH C:\Users\Asus\Desktop\Scholarship\resources\views/organization/attachment.blade.php ENDPATH**/ ?>