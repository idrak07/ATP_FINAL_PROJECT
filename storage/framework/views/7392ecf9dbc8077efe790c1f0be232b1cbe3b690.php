<!DOCTYPE html>
<html>
<head>
    <title>Apply</title>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <script src=""></script>
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

<fieldset>
    <legend></legend>
    <center>
        <form method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <table border="2" width="400">
                <tr>
                    <td>
                        Your Introduction: 
                    </td>
                    <td>
                        <textarea name="intro" placeholder="Your Introduction" value="<?php echo e(old('intro')); ?>"></textarea>
                    </td>
                    <td><?php echo e($errors->first('intro')); ?></td>
                </tr>
                <tr>
                    <td>
                        Purpose: 
                    </td>
                    <td>
                        <textarea name="purpose" placeholder="Purpose in short" value="<?php echo e(old('purpose')); ?>"></textarea>
                    </td>
                    <td><?php echo e($errors->first('purpose')); ?></td>

                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" name="submit" value="Confirm Apply"/>
                        </center>
                    </td>
                   
                </tr>
                        
                
        
            </table>
            </form>
    </center>
	
</fieldset>
</body>
</html><?php /**PATH C:\Users\ASUS\Desktop\Final Project\LaravelApp\resources\views/student/apply.blade.php ENDPATH**/ ?>