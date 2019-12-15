<?php

namespace App\Http\Controllers;
use App\Http\Requests\OrganizationRequest;
use Illuminate\Http\Request;
use App\Organization;
use App\User;

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
    function organization(){
        return view('registration.organization');
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
            'cv'=>'mimes:pdf',
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
        $student->eq2=$r2;
        $student->eq3=$r3;
        $student->eq4=$r4;
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
    function insertOrganization(OrganizationRequest $req){


        
        $approvalfile_name="";
        $informationfile_name="";
        if($req->hasFile('approval') && $req->hasFile('information')){
            $approval = $req->file('approval');
            $information = $req->file('information');
            $approvalfile_name= "approval_".$req->username."_".time().rand(100,999).".".$approval->getClientOriginalExtension();;
            $informationfile_name = "information_".$req->username."_".time().rand(100,999).".".$information->getClientOriginalExtension();;
            $approval->move('upload_Approval',$approvalfile_name);
            $information->move('upload_Information',$informationfile_name);
        }
        
        $organization=new Organization; 
        $user=new User;
        $organization->name=$req->name;
        $organization->addressline=$req->addressline;
        $organization->city=$req->city;
        $organization->postal=$req->postal;
        $organization->country=$req->country;
        $organization->email=$req->email;
        $organization->contact=$req->contact;
        $organization->username=$req->username;
        $organization->password=$req->password;     
        $organization->approval=$approvalfile_name;
        $organization->information=$informationfile_name;
        $organization->description=$req->description;

        $user->username=$req->username;
        $user->password=$req->password;
        $user->type=4;

        if($organization->save() && $user->save())
            return redirect()->route('login.index');
        else
            return redirect()->route('registration.organization');
    }
}
