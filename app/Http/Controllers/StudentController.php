<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    function index(){
        return view('student.index');
    }
    function profile(){
        $student=Student::where('username',session('username'))->first();
        return view('student.profile')->with('student',$student);
    }
    function editProfile(){
        $student=Student::where('username',session('username'))->first();
        return view('student.editprofile')->with('student',$student);
    }
    function updateProfile(Request $req){
        $student=Student::where('username',session('username'))
          ->update(['name' => $req->name,
                    'email'=>$req->email,
          ]);
        
    }
    function editPassword(){
        return view('student.updatepassword');
    }
    function updatePassword(){
        return view('student.updatepassword');
    }
}
