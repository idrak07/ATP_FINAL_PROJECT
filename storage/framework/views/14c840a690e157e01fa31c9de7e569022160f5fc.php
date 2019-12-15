<!DOCTYPE html>
<html>
<head>
    <title>Upload Picture</title>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <script src=""></script>
</head>
<body>

<fieldset>
    <legend>Change Picture</legend>
    <center>
        <form method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <table>
                <tr>
                    <td> Upload Picture:</td>
                    <td><input type="file" name="image"></td>
                    <td><?php echo e($errors->first('image')); ?></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <center>
                                <input type="submit" name="submit" value="Upload">
                         </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <?php echo e(session('msg')); ?>                
                         </center>
                    </td>
                </tr>
                
            </table>
            </form>
    </center>
	
</fieldset>
</body>
</html><?php /**PATH C:\Users\ASUS\Desktop\Final Project\LaravelApp\resources\views/student/updatepicture.blade.php ENDPATH**/ ?>