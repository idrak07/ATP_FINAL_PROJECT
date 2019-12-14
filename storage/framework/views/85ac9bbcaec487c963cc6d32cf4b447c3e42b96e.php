<!DOCTYPE html>
<html>
    <title>
       Student Profile
    </title>
    <style>
        .topnav {
                background-color: #333;
                overflow: hidden;
              }
              
              /* Style the links inside the navigation bar */
              .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
              }
              
              /* Change the color of links on hover */
              .topnav a:hover {
                background-color: #ddd;
                color: black;
              }
              
              /* Add a color to the active/current link */
              /*.topnav a.active {
                background-color: #4CAF50;
                color: white;
              }*/
        </style>
    <body>
        <div class="topnav">
        <a class="active" href="<?php echo e(route('student.index')); ?>">Home</a>
            <a href="<?php echo e(route('student.profile')); ?>"><?php echo e(session('name')); ?></a>
            <a href="">A</a>
            <a href="">B</a>
            <a href="<?php echo e(route('logout')); ?>">Log Out</a>
        </div>
<center>
        <table border="2">
            <tr>
                <td colspan="2">
                    Personal Information:
                </td>
            </tr>
            <tr>
                <td>
                    Name:
                </td>
                <td>
                    <?php echo e($student->name); ?>

                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <?php echo e($student->email); ?>

                </td>
            </tr>
            <tr>
                <td>
                    Contact:
                </td>
                <td>
                    <?php echo e($student->contact); ?>

                </td>
            </tr>
            <tr>
                <td>
                    Apply For:
                </td>
                <td>
                    <?php echo e($student->applyfor); ?>

                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Educational Qualification:
                </td>
            </tr>

            <tr>
                <td>
                    <?php echo e($student->eq1); ?>

                </td>
                <td>
                    <?php echo e($student->r1); ?>

                </td>
            </tr>
            <tr>
                <td>
                    <?php echo e($student->eq2); ?>

                </td>
                <td>
                    <?php echo e($student->r2); ?>

                </td>
            </tr>
            <tr>
                <td>
                    <?php echo e($student->eq3); ?>

                </td>
                <td>
                    <?php echo e($student->r3); ?>

                </td>
            </tr>
            <tr>
                <td>
                    <?php echo e($student->eq4); ?>

                </td>
                <td>
                    <?php echo e($student->r4); ?>

                </td>
            </tr>
            <tr>
                <td>
                    CV:
                </td>
                <td>
                    <a href="/upload_cv/<?php echo e($student->cv); ?>">View CV</a>
                </td>
            </tr>

            <tr aria-rowspan="6">
                <td>
                    Picture:
                </td>
                <td>
                    <a href="/upload_image/<?php echo e($student->image); ?>">
                        <img src="/upload_image/<?php echo e($student->image); ?>" width="100" height="100" alt="Image"/>
                    </a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <a href="<?php echo e(route('student.editprofile')); ?>">Update Profile</a>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <a href="<?php echo e(route('student.updatepassword')); ?>">Update Password</a>
                    </center>
                </td>
            </tr>
            
            
        </center>
       <!-- <img src="/upload_image/<?php echo e($student->image); ?>" alt="Image"/> -->
       
    </body>
</html><?php /**PATH C:\Users\ASUS\Desktop\Final Project\LaravelApp\resources\views/student/profile.blade.php ENDPATH**/ ?>