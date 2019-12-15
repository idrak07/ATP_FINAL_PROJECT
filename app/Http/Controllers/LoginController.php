<?php

namespace App\Http\Controllers;
use App\User;
use App\Organization;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
		return view('login.index');
	}
	public function verify(Request $req){
		$user = User::where('username', $req->username)
					->where('password', $req->password)
					->first();			
		   if($user!=null){
			
			$req->session()->put('username', $req->input('username'));
			$req->session()->put('type', $user->type);			
			if($user->type==1)
                return redirect()->route('admin.index');
            else if($user->type==2)
                return redirect()->route('student.index');
            else if($user->type==3)
                return redirect()->route('university.index');
			else if($user->type==4)
			{
				$organization=Organization::where('username',$req->username)->first();
			
				$req->session()->put('organizationname', $organization->name);
				

				 return redirect()->route('organization.index');
			}
                
             
		}else{
			$req->session()->flash('msg', 'invalid username/password');
			return redirect('/login');
		}
	}
}
