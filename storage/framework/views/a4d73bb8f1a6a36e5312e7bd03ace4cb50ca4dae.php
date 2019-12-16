<!DOCTYPE html>
<html>
<head>
    <title>offer list page</title>

    <script src=""></script>
</head>
<body>
<h1><center> Offer List</center></h1>
<center><a href="/logout"><b>Logout</br></a>
</center></br>
    <center>
        <form method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <table border="3">
	<tr>
	<td>Search:</td>
	<td><input type="text"  name="search" placeholder="Search for any things"  value="<?php echo e(old('name')); ?>"></td>
     </tr>
	 <tr>
                    <td colspan="2">
                        <center>
                                <input type="submit" name="submit" value="Search">
                         </center>
                    </td>
                </tr>
	</table></br>



<table border="2" width="700">
	
		<tr>
			<td>Offer ID</td>
            <td>Organization Name</td>
			<td>Degree</td>
			<td>percentage</td>
            <td>University</td>
            <td>All Information</td>
          
            
		</tr>

	 <?php $__currentLoopData = $offer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
		<tr>
			<td><?php echo e($s->id); ?></td>
            <td><?php echo e($s->organizationname); ?></td>  
			<td><?php echo e($s->degree); ?></td>
			<td><?php echo e($s->percentage); ?></td>          
            <td><?php echo e($s->universityname); ?></td>            
			<td><a href="<?php echo e(route('offer.details', $s->id)); ?>">Details</a></td>
		</tr>
		
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table></br>
    <a href="<?php echo e(route('offer.list')); ?>"><b>||All List Offer||</b></a></br>
	</br><a href="<?php echo e(route('organization.index')); ?>"><b>Back</b></a>
            </form>
    </center>
	

</body>
</html><?php /**PATH C:\Users\Asus\Desktop\Scholarship\resources\views/offerorganization/offerlist.blade.php ENDPATH**/ ?>