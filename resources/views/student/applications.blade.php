<!DOCTYPE html>
<html>
    <title>
       Applications
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
        <a class="active" href="{{route('student.index')}}">Home</a>
            <a href="{{route('student.profile')}}">{{session('name')}}</a>
            <a href="{{route('student.applications')}}">Your Applications</a>
            <a href="">B</a>
            <a href="{{route('logout')}}">Log Out</a>
        </div>
        <div class="posts">
            <center><table border="2" width="400">
                   <@foreach($applications as $application)
                        <tr>
                            <td colspan="2">
                                <h3>
                                    <center>{{$application->title}}</center>
                                </h3>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="2"> 
                       
                            <td>
                            
                        </tr>
                    @endforeach
                </table>
            </center>
        </div>
    </body>
</html>