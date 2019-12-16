<!DOCTYPE html>
<html>
    <title>
       OrganizationProfile
    </title>

    <body>
        <div class="topnav">
        
            
           
        </div>
<center>
        <table border="2"  width="450" height="600">
           <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                    Personal Information
                    </b>
                    </center>
                    
                    </br></td>
                    <a href="<?php echo e(route('logout')); ?>"><b>Logout</b></a>
                
            </tr>

            <tr>
                <td>
                     Organization Name:
                </td>
                <td>
                    <?php echo e($organization->name); ?>

                </td>
            </tr>
            <tr>
                <td>
                    Username :
                </td>
                <td>
                    <?php echo e($organization->username); ?>

                </td>
            <tr>
                <td>
                    Email :
                </td>
                <td>
                    <?php echo e($organization->email); ?>

                </td>
            </tr>
            <tr>
                <td>
                    Contact:
                </td>
                <td>
                    <?php echo e($organization->contact); ?>

                </td>
            </tr>
        
            <tr>
                <td colspan="2"><center>
                <br>
                <b>
                   Address Information
                   </b>
                   </center></br>
                </td>
            </tr>

            <tr>
            <td> Address Line:</td>
                <td>
                    <?php echo e($organization->addressline); ?>

                </td>
                </tr>
                <tr>
                <td> City :</td>
                <td>
                    <?php echo e($organization->city); ?>

                </td>
            </tr>
            <tr>
            <td>  Country:</td>
                <td>
                    <?php echo e($organization->country); ?>

                </td>
                
            </tr>
          
          
            <tr>
                <td colspan="2">
                <br>
                <center>
                <b>
                Attachment 
                </b>
                </center>
                </br></td>
             </tr>   
                
     
            
            <tr>
                <td>
                    Goverment Approval:
                </td>
                <td>
                    <a href="/upload_Approval/<?php echo e($organization->approval); ?>">View Approval</a>
                </td>
            </tr>

            <tr aria-rowspan="6">
                <td>
                   Background Information:
                </td>
                <td>
                    <a href="/upload_Information/<?php echo e($organization->information); ?>">View Information</a>
                </td>
            </tr>
            <tr>
            <td> Description:</td>
                <td>
                    <?php echo e($organization->description); ?>

                </td>
                
            </tr>
            <tr>
            <td colspan="2">
                    <b><center>
                        <a href="<?php echo e(route('organization.personal')); ?>"> Update Personal Information</a>
                    </center>
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>
                    <center>
                        <a href="<?php echo e(route('organization.address')); ?>">Update Address Information</a>
                    </center>
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>
                    <center>
                        <a href="<?php echo e(route('organization.attachment')); ?>">Update Attachment</a>
                    </center>
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>
                    <center>
                        <a href="<?php echo e(route('organization.password')); ?>">Update Password</a>
                    </center>
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>
                    <center>
                        <a href="<?php echo e(route('organization.index')); ?>">Back</a>
                    </center>
                    </b>
                </td>
            </tr>
            
            
        </center>
      
       
    </body>
</html><?php /**PATH C:\Users\Asus\Desktop\Scholarship\resources\views/organization/profile.blade.php ENDPATH**/ ?>