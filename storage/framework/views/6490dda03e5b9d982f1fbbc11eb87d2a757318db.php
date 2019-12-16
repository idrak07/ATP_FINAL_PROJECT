<!DOCTYPE html>
<html>
    <title>
      offer page
    </title>

    <body>
        
<center>
<h1> Offer Details</h1>
        <table  width="400" height="500">
           <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                     Information
                    </b>
                    </center>
                    
                    </br></td>
                    <a href="<?php echo e(route('logout')); ?>"><b>Logout</b></a>
                
            </tr>

            <tr>
                <td>Title:</td>
                
                <td>   <?php echo e($offer->title); ?> </td>
            </tr>
            
            <tr>
                <td>Description:</td>
                
                <td>   <?php echo e($offer->description); ?> </td>
            </tr>
            <tr>
                <td>Degree:</td>
                
                <td>   <?php echo e($offer->degree); ?> </td>
            </tr>
            <tr>
                <td>University:</td>
                
                <td>   <?php echo e($offer->universityname); ?> </td>
            </tr>
            <tr>
                <td>Scholarship Percentage:</td>
                
                <td>   <?php echo e($offer->percentage); ?>% </td>
            </tr>
            <tr>
                <td>Total Seat:</td>
                
                <td>   <?php echo e($offer->totalseat); ?> </td>
            </tr>
            <tr>
                <td colspan="2"><center>
                <br>
                <b>
                   Date Information
                   </b>
                   </center></br>
                </td>
            </tr>

            <tr>
            <td> Apply Date:</td>
                <td>
                    <?php echo e($offer->startdate); ?>

                </td>
            </tr>
                <tr>
                <td> Application Deadline :</td>
                <td>
                    <?php echo e($offer->deadline); ?>

                </td>
            </tr>
            </tr>
            <tr>
            <td colspan="2">
                    <b><center>
                        <a href="<?php echo e(route('offer.updateInfo',$offer->id)); ?>"> Update Information</a>
                    </center>
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>
                    <center>
                        <a href="<?php echo e(route('offer.updateDate',$offer->id)); ?>">Update Application Date</a>
                    </center>
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>
                    <center>
                        <a href="<?php echo e(route('offer.updateSeat',$offer->id)); ?>">Update Tota Seat</a>
                    </center>
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>
                    <center>
                        <a href="<?php echo e(route('offer.delete',$offer->id)); ?>">Delete</a>
                    </center>
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>
                    <center>
                        <a href="<?php echo e(route('offer.list')); ?>">Back</a>
                    </center>
                    </b>
                </td>
            </tr>
            
            
        </center>
      
       
    </body>
</html><?php /**PATH C:\Users\Asus\Desktop\Scholarship\resources\views/offerorganization/offerdetails.blade.php ENDPATH**/ ?>