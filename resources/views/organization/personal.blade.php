<!DOCTYPE html>
<html>
<head>
	<title>update personal page</title>
</head>
<body>
  
	<h1><center> Update  Personal Information</center></h1>
	  
	
	<form method="post" >
	<input type="hidden" name="_token" value="{{csrf_token()}}">
    <center>
	<table border="2" height="400" width="320">
    <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                    Personal Information
                    </b>
                    </center>
                    
                    </br></td>
                    <a href="/logout"><b><br>Logout</br></a>
                
            </tr>
       <tr>
			<td>Organization Name:</td>
			<td><input type="text" name="name" value="{{$organization['name']}}"></td>
            <td>{{ $errors->first('name') }}</td>
		</tr>
        <tr>
			<td>Email:</td>
			<td><input type="text" name="email" value="{{$organization['email']}}"></td>
            <td>{{ $errors->first('email') }}</td>
		</tr>
        <tr>
			<td>Phone Number:</td>
			<td><input type="text" name="contact" value="{{$organization['contact']}}"></td>
            <td>{{ $errors->first('contact') }}</td>
		</tr>
        <tr>
			<td>Username:</td>
			<td><input type="text" name="username" value="{{$organization['username']}}"></td>
            <td>{{ $errors->first('username') }}</td>
		</tr>
		
		<tr>
            <td colspan="2">
              
                <center>
                <b>
                <input type="submit" name="submit" value="update"></td>
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