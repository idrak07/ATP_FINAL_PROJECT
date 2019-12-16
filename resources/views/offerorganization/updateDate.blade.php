<!DOCTYPE html>
<html>
<head>
	<title>update date page</title>
</head>
<body>
  
	<h1><center> Update Date </center></h1>
	  
	
	<form method="post" >
	<input type="hidden" name="_token" value="{{csrf_token()}}">
    <center>
	<table border="" height="300" width="250">
    <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                   Date Information
                    </b>
                    </center>
                    
                    </br></td>
                    <a href="/logout"><b><br>Logout</br></a>
                
                    <tr>
                 <td>Apply Date :</td>
                <td><input type="date"id="sdate" name="startdate"  value="{{$offer['startdate']}}"></td>
                <td>{{ $errors->first('startdate') }}</td>
                 </tr>
                <tr>
                <td> Application Deadline :</td>
                <td><input type="date"id="ddate" name="deadline" value="{{$offer['deadline']}}"></td>
                <td>{{ $errors->first('deadline') }}</td>
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