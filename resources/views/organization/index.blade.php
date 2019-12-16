<!DOCTYPE html>
<html>
    <title>
      organization home
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
    <h1>Welcome Home! {{session('organizationname')}}</h1>
        <div class="topnav">
         <a class="active" href="{{route('organization.index')}}">Home</a>
         <a class="active" href="{{route('organization.profile')}}">{{session('organizationname')}}</a>
         <a class="active" href="{{route('offer.index')}}">Offer Scholarship</a>
         <a class="active" href="{{route('offer.list')}}">Offer List</a>
         <a class="active" href="{{route('offer.index')}}">Student Appllication</a>
         <a class="active" href="{{route('offer.index')}}">University</a>
         <a class="active" href="{{route('offer.index')}}">Contact</a>
            <a href="{{route('logout')}}">Logout</a>
        </div>
    </body>
</html>