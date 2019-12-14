<!DOCTYPE html>
<html>
<head>
    <title>Update Profile</title>
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
        <a class="active" href="{{route('student.index')}}">Home</a>
            <a href="{{route('student.profile')}}">{{session('name')}}</a>
            <a href="">A</a>
            <a href="">B</a>
            <a href="{{route('logout')}}">Log Out</a>
        </div>

<fieldset>
    <legend>Update Profile</legend>
    <center>
        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <table>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" name="name" value="{{$student->name}}">*
                    </td>
                    <td>{{ $errors->first('name') }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="{{$student->email}}">*</td>
                    <td>{{ $errors->first('email') }}</td>
                </tr>
                <tr>
                    <td>Contact:</td>
                    <td><input type="text" name="contact" value="{{$student->contact}}">*</td>
                    <td>{{ $errors->first('contact') }}</td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td><input type="date" name="dob" value="{{$student->dob}}">*</td>
                    <td>{{ $errors->first('dob') }}</td>
                </tr>
                <tr>
                    <td>Apply For:</td>
                    <td>
                        <select name="applyfor" value="{{$student->applyfor}}">
                            <option value="">Select</option>
                            <option value="Bachelor">Bachelor/Equivalent</option>
                            <option value="Masters">Masters/Equivalent</option>
                            <option value="PHD">PHD</option>
                        </select>*
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="eq1" value="{{$student->eq1}}">
                            <option value="">Educational Qualification 1</option>
                            <option value="SSC">SSC/Equivalent</option>
                            <option value="HSC">HSC/Equivalent</option>
                            <option value="Bachelor">Bachelor/Equivalent</option>
                            <option value="Masters">Masters/Equivalent</option>
                        </select>
                    </td>
                    <td>
                        <textarea name="r1" placeholder="Result/Description" value="{{$student->r1}}"></textarea>
                    </td>
                
                </tr>
                <tr>
                    <td>
                        <select name="eq2" value="{{$student->eq2}}">
                            <option value="">Educational Qualification 2</option>
                            <option value="SSC">SSC/Equivalent</option>
                            <option value="HSC">HSC/Equivalent</option>
                            <option value="Bachelor">Bachelor/Equivalent</option>
                            <option value="Masters">Masters/Equivalent</option>
                        </select>
                    </td>
                    <td>
                        <textarea name="r2" placeholder="Result/Description" value="{{$student->r2}}"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="eq3" value="{{$student->eq3}}">
                            <option value="">Educational Qualification 3</option>
                            <option value="SSC">SSC/Equivalent</option>
                            <option value="HSC">HSC/Equivalent</option>
                            <option value="Bachelor">Bachelor/Equivalent</option>
                            <option value="Masters">Masters/Equivalent</option>
                        </select>
                    </td>
                    <td>
                        <textarea name="r3" placeholder="Result/Description" value="{{$student->r3}}"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="eq4" value="{{$student->eq4}}">
                            <option value="">Educational Qualification 2</option>
                            <option value="SSC">SSC/Equivalent</option>
                            <option value="HSC">HSC/Equivalent</option>
                            <option value="Bachelor">Bachelor/Equivalent</option>
                            <option value="Masters">Masters/Equivalent</option>
                        </select>
                    </td>
                    <td>
                        <textarea name="r4" placeholder="Result/Description" value="{{$student->r4}}"></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="{{$student->username}}">*</td>
                    <td>{{ $errors->first('username') }}</td>
                </tr>
                <!--<tr>
                    <td>Password:</td>
                    <td><input id = "pass" type="password" name="password" value="{{$student->password}}">*</td>
                    <td>{{ $errors->first('password') }}</td>
                </tr>
                <tr>
                    <td> Confirm Password:</td>
                    <td><input id = "repass" type="password" name="confirmpassword" value="{{$student->password}}">*</td>
                    <td>{{ $errors->first('confirmpassword') }}</td>
                </tr>
                <tr>
                    <td> Upload CV:</td>
                    <td><input id = "repass" type="file" name="cv"></td>
                    <td>{{ $errors->first('cv') }}</td>
                </tr>
                <tr>
                    <td>Upload Image:</td>
                    <td><input id = "repass" type="file" name="image"></td>
                    <td>{{ $errors->first('image') }}</td>
                </tr>
            -->
                <tr>
                    <td colspan="2">
                        <center>
                                <input type="submit" name="submit" value="Update Profile">
                         </center>
                    </td>
                </tr>
                <tr>
                        <td colspan="2">
                            <center>
                            <a href="{{route('student.profile')}}">Back</a>
                             </center>
                        </td>
                    </tr>
            </table>
            </form>
    </center>
	
</fieldset>
</body>
</html>