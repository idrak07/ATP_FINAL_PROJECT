<!DOCTYPE html>
<html>
<head>
    <title>Registration as Organization</title>

    <script src=""></script>
</head>
<body>

<fieldset>
    <legend>Create Account</legend>
    <center>
        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" size=25 name="name" placeholder="Enter Organization Name"  value="{{old('name')}}"></td>
                    <td>{{ $errors->first('name') }}</td>
                </tr>
                
                <tr>
                <td>Address Details</td>
                </tr>
                <tr>
                <td>Address line :</td>
                <td><input type="text" name="addressline"  placeholder="Enter  Address Line" value="{{old('addressline')}}"></td>
                <td>{{ $errors->first('addressline') }}</td>
                </tr>
                <tr>
                <td>City/Town :</td>
                <td><input type="text" name="city"  placeholder="Enter your city" value="{{old('city')}}"></td>
                <td>{{ $errors->first('city') }}</td>
                </tr>
                <tr>
                <td>Postal code :</td>
                <td><input type="text" name="postal"  placeholder="Enter Postal code" value="{{old('postal')}}"></td>
                <td>{{ $errors->first('postal') }}</td>
                </tr>
                <tr>
                  <td>Country :</td>
                    <td>
                        <select name="country" value="{{old('country')}}">
                            <option value="">Select A Country</option>
                            <option value=" Bangladesh"> Bangladesh</option>
                            <option value="India">India</option>
                            <option value=" Indonesia"> Indonesia</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="China">China</option>
                            <option value="Russia">Russia</option>
                            <option value="Japan">Japan</option>
                            <option value="Iran">Iran</option>
                        </select>
                    </td>
                    <td>{{ $errors->first('country') }}</td>
                    </tr>
                    
                  <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"  placeholder="Ex:s1@gmail.com" value="{{old('email')}}"></td>
                    <td>{{ $errors->first('email') }}</td>
                </tr>
                         
                 
                    
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="text" name="contact" size=15  placeholder="Enter phone Number"value="{{old('contact')}}"></td>
                    <td>{{ $errors->first('contact') }}</td>
                </tr>
                
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="{{old('username')}}"></td>
                    <td>{{ $errors->first('username') }}</td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input id = "pass" type="password" name="password"></td>
                    <td>{{ $errors->first('password') }}</td>
                </tr>
                <tr>
                    <td> Repeat Password:</td>
                    <td><input id = "repeat" type="password" name="repeatpassword"></td>
                    <td>{{ $errors->first('confirmpassword') }}</td>
                </tr>
                <tr>
                    <td> Government Approval:</td>
                    <td><input id = "repass" type="file" name="approval"></td>
                    <td>{{ $errors->first('approval') }}</td>
                </tr>
                <tr>
                    <td> Background Information:</td>
                    <td><input id = "repass" type="file" name="information"></td>
                    <td>{{ $errors->first('information') }}</td>
                </tr>
              
              <tr> 
              <td>Description:</td>
                   <td>
                        <textarea name="description" placeholder="Description" value="{{old('description')}}"></textarea>
                    </td>
                    
                    </tr>
                <tr>
                    <td colspan="2">
                        <center>
                                <input type="submit" name="submit" value="Create Account">
                         </center>
                    </td>
                </tr>
                <tr>
                        <td colspan="2">
                            <center>
                                Already Have an Account !<br/>
                                <a href="/login">Click Here</a> To Log In
                             </center>
                        </td>
                    </tr>
            </table>
            </form>
    </center>
	
</fieldset>
</body>
</html>