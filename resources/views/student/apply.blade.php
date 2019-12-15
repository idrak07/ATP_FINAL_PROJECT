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
        <a class="active" href="{{route('student.index')}}">Home</a>
            <a href="{{route('student.profile')}}">{{session('name')}}</a>
            <a href="">A</a>
            <a href="">B</a>
            <a href="{{route('logout')}}">Log Out</a>
        </div>

<fieldset>
    <legend></legend>
    <center>
        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <table border="2" width="400">
                <tr>
                    <td>
                        Your Introduction: 
                    </td>
                    <td>
                        <textarea name="intro" placeholder="Your Introduction" value="{{old('intro')}}"></textarea>
                    </td>
                    <td>{{ $errors->first('intro') }}</td>
                </tr>
                <tr>
                    <td>
                        Purpose: 
                    </td>
                    <td>
                        <textarea name="purpose" placeholder="Purpose in short" value="{{old('purpose')}}"></textarea>
                    </td>
                    <td>{{ $errors->first('purpose') }}</td>

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
</html>