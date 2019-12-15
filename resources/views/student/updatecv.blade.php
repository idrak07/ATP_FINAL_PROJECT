<!DOCTYPE html>
<html>
<head>
    <title>Upload CV</title>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <script src=""></script>
</head>
<body>

<fieldset>
    <legend>Upload CV</legend>
    <center>
        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <table>
                <tr>
                    <td> Upload CV:</td>
                    <td><input type="file" name="cv"></td>
                    <td>{{ $errors->first('cv') }}</td>
                </tr>

                <tr>
                    <td colspan="2">
                        <center>
                                <input type="submit" name="submit" value="Upload">
                         </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            {{session('msg')}}                
                         </center>
                    </td>
                </tr>
                
            </table>
            </form>
    </center>
	
</fieldset>
</body>
</html>