<!DOCTYPE html>
<html>
<head>
    <title>Registration as Student</title>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <script src=""></script>
</head>
<body>

<fieldset>
    <legend>Create Account</legend>
    <center>
        <form method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo e(old('name')); ?>">*</td>
                    <td><?php echo e($errors->first('name')); ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?php echo e(old('email')); ?>">*</td>
                    <td><?php echo e($errors->first('email')); ?></td>
                </tr>
                <tr>
                    <td>Contact:</td>
                    <td><input type="text" name="contact" value="<?php echo e(old('contact')); ?>">*</td>
                    <td><?php echo e($errors->first('contact')); ?></td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td><input type="date" name="dob" value="<?php echo e(old('dob')); ?>">*</td>
                    <td><?php echo e($errors->first('dob')); ?></td>
                </tr>
                <tr>
                    <td>Apply For:</td>
                    <td>
                        <select name="applyfor" value="<?php echo e(old('applyfor')); ?>">
                            <option value="">Select</option>
                            <option value="Bachelor">Bachelor/Equivalent</option>
                            <option value="Masters">Masters/Equivalent</option>
                            <option value="PHD">PHD</option>
                        </select>*
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="eq1" value="<?php echo e(old('eq1')); ?>">
                            <option value="">Educational Qualification 1</option>
                            <option value="SSC">SSC/Equivalent</option>
                            <option value="HSC">HSC/Equivalent</option>
                            <option value="Bachelor">Bachelor/Equivalent</option>
                            <option value="Masters">Masters/Equivalent</option>
                        </select>
                    </td>
                    <td>
                        <textarea name="r1" placeholder="Result/Description" value="<?php echo e(old('r1')); ?>"></textarea>
                    </td>
                
                </tr>
                <tr>
                    <td>
                        <select name="eq2" value="<?php echo e(old('eq2')); ?>">
                            <option value="">Educational Qualification 2</option>
                            <option value="SSC">SSC/Equivalent</option>
                            <option value="HSC">HSC/Equivalent</option>
                            <option value="Bachelor">Bachelor/Equivalent</option>
                            <option value="Masters">Masters/Equivalent</option>
                        </select>
                    </td>
                    <td>
                        <textarea name="r2" placeholder="Result/Description" value="<?php echo e(old('r2')); ?>"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="eq3" value="<?php echo e(old('eq3')); ?>">
                            <option value="">Educational Qualification 3</option>
                            <option value="SSC">SSC/Equivalent</option>
                            <option value="HSC">HSC/Equivalent</option>
                            <option value="Bachelor">Bachelor/Equivalent</option>
                            <option value="Masters">Masters/Equivalent</option>
                        </select>
                    </td>
                    <td>
                        <textarea name="r3" placeholder="Result/Description" value="<?php echo e(old('r3')); ?>"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="eq4" value="<?php echo e(old('eq4')); ?>">
                            <option value="">Educational Qualification 2</option>
                            <option value="SSC">SSC/Equivalent</option>
                            <option value="HSC">HSC/Equivalent</option>
                            <option value="Bachelor">Bachelor/Equivalent</option>
                            <option value="Masters">Masters/Equivalent</option>
                        </select>
                    </td>
                    <td>
                        <textarea name="r4" placeholder="Result/Description" value="<?php echo e(old('r4')); ?>"></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?php echo e(old('username')); ?>">*</td>
                    <td><?php echo e($errors->first('username')); ?></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input id = "pass" type="password" name="password">*</td>
                    <td><?php echo e($errors->first('password')); ?></td>
                </tr>
                <tr>
                    <td> Confirm Password:</td>
                    <td><input id = "repass" type="password" name="confirmpassword">*</td>
                    <td><?php echo e($errors->first('confirmpassword')); ?></td>
                </tr>
                <tr>
                    <td> Upload CV:</td>
                    <td><input id = "repass" type="file" name="cv"></td>
                    <td><?php echo e($errors->first('cv')); ?></td>
                </tr>
                <tr>
                    <td>Upload Image:</td>
                    <td><input id = "repass" type="file" name="image"></td>
                    <td><?php echo e($errors->first('image')); ?></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <center>
                                <input type="submit" name="submit" value="Create Account">
                         </center>
                    </td>
                </tr>
                <tr>
                        <td colspan="2">
                            <center>
                                Already Have an Account !<br/>
                                <a href="/login">Click Here</a> To Log In
                             </center>
                        </td>
                    </tr>
            </table>
            </form>
    </center>
	
</fieldset>
</body>
</html><?php /**PATH C:\Users\ASUS\Desktop\Final Project\LaravelApp\resources\views/registration/student.blade.php ENDPATH**/ ?>