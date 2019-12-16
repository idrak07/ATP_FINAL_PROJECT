<!DOCTYPE html>
<html>
<head>
	<title>update date page</title>
</head>
<body>
  
	<h1><center> Update Date </center></h1>
	  
	
	<form method="post" >
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <center>
	<table border="" height="300" width="250">
    <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                   Date Information
                    </b>
                    </center>
                    
                    </br></td>
                    <a href="/logout"><b><br>Logout</br></a>
                
                    <tr>
                 <td>Apply Date :</td>
                <td><input type="date"id="sdate" name="startdate"  value="<?php echo e($offer['startdate']); ?>"></td>
                <td><?php echo e($errors->first('startdate')); ?></td>
                 </tr>
                <tr>
                <td> Application Deadline :</td>
                <td><input type="date"id="ddate" name="deadline" value="<?php echo e($offer['deadline']); ?>"></td>
                <td><?php echo e($errors->first('deadline')); ?></td>
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
                <a href="<?php echo e(route('offer.details',$offer->id)); ?>">Back</a>  

                </b>
                </center>
                </td>
		</tr>
	</table>
    </center>
</form>

</body>
</html><?php /**PATH C:\Users\Asus\Desktop\Scholarship\resources\views/offerorganization/updateDate.blade.php ENDPATH**/ ?>