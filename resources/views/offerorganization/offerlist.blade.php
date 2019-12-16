<!DOCTYPE html>
<html>
<head>
    <title>offer list page</title>

    <script src=""></script>
</head>
<body>
<h1><center> Offer List</center></h1>
<center><a href="/logout"><b>Logout</br></a>
</center></br>
    <center>
        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <table border="3">
	<tr>
	<td>Search:</td>
	<td><input type="text"  name="search" placeholder="Search for any things"  value="{{old('name')}}"></td>
     </tr>
	 <tr>
                    <td colspan="2">
                        <center>
                                <input type="submit" name="submit" value="Search">
                         </center>
                    </td>
                </tr>
	</table></br>



<table border="2" width="700">
	
		<tr>
			<td>Offer ID</td>
            <td>Organization Name</td>
			<td>Degree</td>
			<td>percentage</td>
            <td>University</td>
            <td>All Information</td>
          
            
		</tr>

	 @foreach($offer as $s)
	
		<tr>
			<td>{{$s->id}}</td>
            <td>{{$s->organizationname}}</td>  
			<td>{{$s->degree}}</td>
			<td>{{$s->percentage}}%</td>          
            <td>{{$s->universityname}}</td>            
			<td><a href="{{route('offer.details', $s->id)}}">Details</a></td>
		</tr>
		
	@endforeach

	</table></br>
    <a href="{{route('offer.list')}}"><b>||All List Offer||</b></a></br>
	</br><a href="{{route('organization.index')}}"><b>Back</b></a>
            </form>
    </center>
	

</body>
</html>