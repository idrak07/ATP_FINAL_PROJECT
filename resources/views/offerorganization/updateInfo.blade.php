<!DOCTYPE html>
<html>
<head>
	<title>update personal page</title>
</head>
<body>
  
	<h1><center> Update  Information</center></h1>
	  
	
	<form method="post" >
	<input type="hidden" name="_token" value="{{csrf_token()}}">
    <center>
	<table border="2" height="400" width="320">
    <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                    Information
                    </b>
                    </center>
                    
                    </br></td>
                    <a href="/logout"><b><br>Logout</br></a>
                
            </tr>
       <tr>
			<td>Title:</td>
			<td><input type="text" name="title" value="{{$offer['title']}}"></td>
            <td>{{ $errors->first('title') }}</td>
		</tr>
        <tr>
			<td>Description:</td>
			<td><input type="text" name="description" value="{{$offer['description']}}"></td>
            <td>{{ $errors->first('description') }}</td>
		</tr>
        <tr>
			<td>Degree:</td>
			<td><input type="text" name="degree" value="{{$offer['degree']}}"></td>
            <td>{{ $errors->first('degree') }}</td>
		</tr>
        <tr>
			<td>Scholarship Percentage:</td>
			<td><input type="text" name="percentage" value="{{$offer['percentage']}}"></td>
            <td>{{ $errors->first('percentage') }}</td>
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
                <a href="{{route('offer.details',$offer->id)}}">Back</a>  

                </b>
                </center>
                </td>
		</tr>
	</table>
    </center>
</form>

</body>
</html>