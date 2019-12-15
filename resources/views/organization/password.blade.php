<!DOCTYPE html>
<html>
<head>
	<title>password update page</title>
</head>
<body>
   <a href="/logout"><b>Logout</br></a>
	<h1><center> Enter Current password</center></h1>
	  
	
	<form method="post" >
	<input type="hidden" name="_token" value="{{csrf_token()}}">
    <center>
	<table border="2" height="200" width="150">
    <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                  Password 
                    </b>
                    </center>
                    
                    </br></td>     
                    <a href="/logout"><b><br>Logout</br></a>           
            </tr>
            <tr>
                    <td> Current Password:</td>
                    <td><input  type="password" name=currentpassword></td>
                    <td>{{ $errors->first('currentpassword') }}</td>
                </tr>
               
              
              
		
		<tr>
            <td colspan="2">
              
                <center>
                <b>
                <input type="submit" name="submit" value="Click"></td>
                </b>
                </center>
                </td>
		</tr>
        
		<tr>
            <td colspan="2">
                
                <center>
                <b>
                <a href="{{route('organization.profile')}}">Back</a>  

                </b>
                </center>
                </td>
		</tr>
	</table>
    </center>
</form>

</body>
</html>