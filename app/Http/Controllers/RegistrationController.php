<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;

class RegistrationController extends Controller
{
    function index(){
        return view('registration.index');
    }
    function student(){
        return view('registration.student');
    }
    function university(){
        return view('registration.university');
    }
    function org(){
        return view('registration.org');
    }
    function insertStudent(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'dob'=>'required',
            'username'=>'required|unique:users,username',
            'password'=>'required|min:4|max:15',
            'confirmpassword' => 'same:password',
            'cv'=>'mimes:pdf,doc,docx',
            'image'=>'mimes:jpeg,jpg',
        ]);
        $name=$req->name;
        $email=$req->email;
        $contact=$req->contact;
        $dob=strval($req->dob);
        $applyfor=$req->applyfor;
        $eq1=$req->eq1;
        $r1=$req->r1;
        $eq2=$req->eq2;
        $r2=$req->r2;
        $eq3=$req->eq3;
        $r3=$req->r3;
        $eq4=$req->eq4;
        $r4=$req->r4;
        $username=$req->username;
        $password=$req->password;
        $cvfile_name="";
        $imagefile_name="";
        if($req->hasFile('cv') && $req->hasFile('image')){
            $cv = $req->file('cv');
            $image = $req->file('image');
            $cvfile_name= "cv_".$username."_".time().rand(100,999).".".$cv->getClientOriginalExtension();;
            $imagefile_name = "image_".$username."_".time().rand(100,999).".".$image->getClientOriginalExtension();;
            $cv->move('upload_cv',$cvfile_name);
            $image->move('upload_image',$imagefile_name);
        }
        else{}
        $student=new Student; 
        $user=new User;
        $student->name=$name;
        $student->username=$username;
        $student->email=$email;
        $student->contact=$contact;
        $student->dob=$dob;
        $student->applyfor=$applyfor;
        $student->eq1=$eq1;
        $student->r1=$r1;
        $student->eq2=$eq2;
        $student->r2=$r2;
        $student->eq3=$eq3;
        $student->r3=$r3;
        $student->eq4=$eq4;
        $student->r4=$r4;
        $student->cv=$cvfile_name;
        $student->image=$imagefile_name;

        $user->username=$username;
        $user->password=$password;
        $user->type=2;

        if($student->save() && $user->save())
            return redirect()->route('student.index');
        else
            return redirect()->route('registration.student');
    }
    function insertUniversity(Request $req){
    
    }
}
