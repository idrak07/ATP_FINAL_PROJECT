<!DOCTYPE html>
<html>
    <title>
       Student Index
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
              .topnav a.active {
                background-color: #4CAF50;
                color: white;
              }
        </style>
    <body>
        <div class="topnav">
        <a class="active" href="<?php echo e(route('student.index')); ?>">Home</a>
            <a href="<?php echo e(route('student.profile')); ?>"><?php echo e(session('name')); ?></a>
        <a href="<?php echo e(route('student.applications')); ?>">Your Applications</a>
            <a href="">B</a>
            <a href="<?php echo e(route('logout')); ?>">Log Out</a>
        </div>
        <div class="posts">
            <center>
                <table border="2" width="400">
                    <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="2">
                                <h3>
                                    <center><?php echo e($offer->title); ?></center>
                                </h3>
                            </td>
                        </tr>
                        <tr aria-rowspan="4">
                            <td>
                                <?php echo e($offer->description); ?>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>
                                    <center>
                                        <a href="<?php echo e(route('student.apply', $offer->id)); ?>">Apply</a>
                                    </center>
                                </b>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </center>
        </div>
    </body>
</html><?php /**PATH C:\Users\ASUS\Desktop\Final Project\LaravelApp\resources\views/student/index.blade.php ENDPATH**/ ?>