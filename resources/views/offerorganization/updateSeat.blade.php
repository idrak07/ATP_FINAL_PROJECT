<!DOCTYPE html>
<html>
<head>
	<title>update seat page</title>
</head>
<body>
  
	<h1><center> Update Seat</center></h1>
	  
	
	<form method="post" >
	<input type="hidden" name="_token" value="{{csrf_token()}}">
    <center>
	<table border="" height="280" width="280">
    <tr>
                 <td colspan="2">
                 <br><center>
                 <b>
                  Seat Information
                    </b>
                    </center>
                    
                    </br></td>
                    <a href="/logout"><b><br>Logout</br></a>
                
                    <tr>
                 <td colspan="2"><b><center>Total Seat :{{$offer['totalseat']}}</b></center></td>
                
                 </tr>
                <tr>
                <td> Enter the Add or subtact number :</td>
                <td><input type="text" name="seat" placeholder="Enter the Add or subtact number" ></td>
                <td>{{ $errors->first('seat') }}</td>
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