<!DOCTYPE html>
<html>
<head>
	<title>update personal page</title>
</head>
<body>
  
	<h1><center> Update  Information</center></h1>
	  
	
	<form method="post" >
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <center>
	<table border="2" height="400" width="320">
    <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                    Information
                    </b>
                    </center>
                    
                    </br></td>
                    <a href="/logout"><b><br>Logout</br></a>
                
            </tr>
       <tr>
			<td>Title:</td>
			<td><input type="text" name="title" value="<?php echo e($offer['title']); ?>"></td>
            <td><?php echo e($errors->first('title')); ?></td>
		</tr>
        <tr>
			<td>Description:</td>
			<td><input type="text" name="description" value="<?php echo e($offer['description']); ?>"></td>
            <td><?php echo e($errors->first('description')); ?></td>
		</tr>
        <tr>
			<td>Degree:</td>
			<td><input type="text" name="degree" value="<?php echo e($offer['degree']); ?>"></td>
            <td><?php echo e($errors->first('degree')); ?></td>
		</tr>
        <tr>
			<td>Scholarship Percentage:</td>
			<td><input type="text" name="percentage" value="<?php echo e($offer['percentage']); ?>"></td>
            <td><?php echo e($errors->first('percentage')); ?></td>
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
</html><?php /**PATH C:\Users\Asus\Desktop\Scholarship\resources\views/offerorganization/updateInfo.blade.php ENDPATH**/ ?>