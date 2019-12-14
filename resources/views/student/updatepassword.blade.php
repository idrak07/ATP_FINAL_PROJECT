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
    <legend>Update Password</legend>
    <center>
        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <table>
                
                <tr>
                    <td>Current Password:</td>
                    <td><input id = "pass" type="password" name="currentpassword"></td>
                    <td>{{ $errors->first('password') }}</td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input id = "pass" type="password" name="password"></td>
                    <td>{{ $errors->first('password') }}</td>
                </tr>
                <tr>
                    <td> Confirm Password:</td>
                    <td><input id = "repass" type="password" name="confirmpassword"></td>
                    <td>{{ $errors->first('confirmpassword') }}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" name="submit" value="Confirm Update">
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