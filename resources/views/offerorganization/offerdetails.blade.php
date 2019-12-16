<!DOCTYPE html>
<html>
    <title>
      offer page
    </title>

    <body>
        <div class="topnav">
        
            
           
        </div>
<center>
        <table border="2"  width="450" height="600">
           <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                    All Information
                    </b>
                    </center>
                    
                    </br></td>
                    <a href="{{route('logout')}}"><b>Logout</b></a>
                
            </tr>

            <tr>
                <td>
                     tion NameOrganiza:
                </td>
                <td>
                    {{$organization->name}}
                </td>
            </tr>
            <tr>
                <td>
                    Username :
                </td>
                <td>
                    {{$organization->username}}
                </td>
            <tr>
                <td>
                    Email :
                </td>
                <td>
                    {{$organization->email}}
                </td>
            </tr>
            <tr>
                <td>
                    Contact:
                </td>
                <td>
                    {{$organization->contact}}
                </td>
            </tr>
        
            <tr>
                <td colspan="2"><center>
                <br>
                <b>
                   Address Information
                   </b>
                   </center></br>
                </td>
            </tr>

            <tr>
            <td> Address Line:</td>
                <td>
                    {{$organization->addressline}}
                </td>
                </tr>
                <tr>
                <td> City :</td>
                <td>
                    {{$organization->city}}
                </td>
            </tr>
            <tr>
            <td>  Country:</td>
                <td>
                    {{$organization->country}}
                </td>
                
            </tr>
          
          
            <tr>
                <td colspan="2">
                <br>
                <center>
                <b>
                Attachment 
                </b>
                </center>
                </br></td>
             </tr>   
                
     
            
            <tr>
                <td>
                    Goverment Approval:
                </td>
                <td>
                    <a href="/upload_Approval/{{$organization->approval}}">View Approval</a>
                </td>
            </tr>

            <tr aria-rowspan="6">
                <td>
                   Background Information:
                </td>
                <td>
                    <a href="/upload_Information/{{$organization->information}}">View Information</a>
                </td>
            </tr>
            <tr>
            <td> Description:</td>
                <td>
                    {{$organization->description}}
                </td>
                
            </tr>
            <tr>
            <td colspan="2">
                    <b><center>
                        <a href="{{route('organization.personal')}}"> Update Personal Information</a>
                    </center>
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>
                    <center>
                        <a href="{{route('organization.address')}}">Update Address Information</a>
                    </center>
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>
                    <center>
                        <a href="{{route('organization.attachment')}}">Update Attachment</a>
                    </center>
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>
                    <center>
                        <a href="{{route('organization.password')}}">Update Password</a>
                    </center>
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>
                    <center>
                        <a href="{{route('organization.index')}}">Back</a>
                    </center>
                    </b>
                </td>
            </tr>
            
            
        </center>
      
       
    </body>
</html>