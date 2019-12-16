<?php

namespace App\Http\Controllers;

use App\Organization;
use App\User;
use App\Offer;
use App\University;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('organization.index');
    }
    public function profile(Request $request)
    {
        $organization=Organization::Where('username',$request->session()->get('username'))
        ->first();
        return view('organization.profile')->with('organization', $organization);
    }
    public function editpersonal(Request $request)
    {
        $org=Organization::select('name','email','contact','username')->where('username', $request->session()->get('username'))->first();
        return view('organization.personal')->with('organization',$org);
    }
    public function editaddress(Request $request)
    {
        $org=Organization::select('addressline','city','country')->where('username', $request->session()->get('username'))->first();
        return view('organization.address')->with('organization',$org);
    }
    public function editattachment(Request $request)
    {
        $org=Organization::select('approval','information','description')->where('username', $request->session()->get('username'))->first();
       
        return view('organization.attachment')->with('organization',$org);
    }
    public function editpassword(Request $request)
    {
        
        return view('organization.password');
    }



    //update organization database

    public function updatepersonal(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'contact'=>'required',           
            'username'=>'required',
            
        ]);
       
       
       
        $organization=Organization::where('username', $request->session()->get('username'))->first();
        $user=User::where('username', $request->session()->get('username'))->first();
        
        $organization->name =$request->name;
     
        $organization->email = $request->email;
        $organization->contact = $request->contact;
        $organization->username = $request->username;
        $user->username=$request->username;
        
        if($user->save() && $organization->save())
        {
            $request->session()->put('username', $request->input('username'));
            $organization=Organization::where('username',$request->username)->first();
			
				$request->session()->put('organizationname', $organization->name);
            return redirect()->route('organization.profile');
        }
        else{
            return redirect()->route('organization.personal');
        }

        
    }
    public function updateaddress(Request $request)
    {
       
        $request->validate([
            'addressline'=>'required',
            'city'=>'required',
            'country'=>'required',           
           
        ]);     
       
        $organization=Organization::where('username', $request->session()->get('username'))->first();

        $organization->addressline =$request->addressline;
        $organization->city = $request->city;
        $organization->country = $request->country;
    
        
        if( $organization->save())
        {           
            return redirect()->route('organization.profile');
        }
        else{
            return redirect()->route('organization.address');
        }

    }

    public function updateattachment(Request $request)
    {
        $request->validate([
            
            'approval'=>'required|mimes:pdf',
            'information'=>'required|mimes:pdf',
        ]);
       $username= $request->session()->get('username');
      
       $approvalfile_name="";
       $informationfile_name="";
       if($request->hasFile('approval') && $request->hasFile('information')){
           $approval = $request->file('approval');
           $information = $request->file('information');
           $approvalfile_name= "approval_".$username."_".time().rand(100,999).".".$approval->getClientOriginalExtension();;
           $informationfile_name = "information_".$username."_".time().rand(100,999).".".$information->getClientOriginalExtension();;
         
           $approval->move('upload_Approval',$approvalfile_name);
           $information->move('upload_Information',$informationfile_name);
       }
       $organization=Organization::where('username', $request->session()->get('username'))->first();

        $organization->approval = $approvalfile_name;
        $organization->information =$informationfile_name;
  
        if( $organization->save())
        {           
            return redirect()->route('organization.profile');
        }
        else{
            return redirect()->route('organization.attachment');
        }
    }
    //password
    public function currentpassword(Request $request)
    {$request->validate([
            
        'currentpassword'=>'required',
       
    ]);

        $user=User::where('username',$request->session()->get('username'))->first();
        if($user->password==$request->currentpassword)
        {
            return redirect()->route('organization.confirm');
        }
        else{
            return view('organization.password');
        }
        
        
    }
    public function confirmpassword(Request $request)
   {
       return view('organization.confirmpassword');
        
    }
    //confirm newpassword post
    public function confirmpasswordpost(Request $request)
    {$request->validate([
            
        'newpassword'=>'required|min:4|max:8',
        'repeatnewpassword' => 'same:newpassword',
       
    ]);

        $organization=Organization::where('username',$request->session()->get('username'))->first();
        $user=User::where('username',$request->session()->get('username'))->first();
        $organization->password=$request->repeatnewpassword;
        $user->password=$request->repeatnewpassword;


        if($organization->save()&&$user->save())
        {
            return redirect()->route('organization.massage');
        }
        else{
            return redirect()->route('organization.confirm');
        }
        
        
    }
    //massage
    public function massage(Request $request)
   {
       return view('organization.massage');
        
    }
    public function massagebackprofile(Request $request)
   {
    return redirect()->route('organization.profile');
        
    }
    //offer index university show
    public function offerindex(Request $request)
    {
        $name = University::all();

        return view('offerorganization.index')->with('name',$name);
     
         
     }
     //post offer
     public function offeradded(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'degree'=>'required',           
            'startdate'=>'required|after:today',
            'deadline'=>'required|after:startdate',
            'percentage'=>'required',
            'name'=>'required',
            'totalseat'=>'required',
            
        ]);
        $offer=new offer; 
        $offer->organizationname=$request->session()->get('organizationname');
        $offer->title=$request->title;
        $offer->description=$request->description;
        $offer->degree=$request->degree;
        $offer->startdate=$request->startdate;
        $offer->deadline=$request->deadline;
        $offer->percentage=$request->percentage;
        $offer->universityname=$request->name;
        $offer->totalseat=$request->totalseat;
       if($offer->save())
       {
        return redirect()->route('offer.massage');  
       } 
    else{
        return redirect()->route('offer.index');
    }
    
     
         
     }
//massage offer
public function massagetooffer(Request $request)
{
    return view('offerorganization.massageoffer');
     
 }
 public function massagepostoffer(Request $request)
{
    return redirect()->route('organization.index');
     
 }
 //offer list

 public function offerlist(Request $request)
{

    $offer= Offer::where('organizationname',$request->session()->get('organizationname'))->get();
    
     return view('offerorganization.offerlist')->with('offer',$offer);
     
 }
 //search
 public function offerlistsearch(Request $request)
{

    $id= Offer::where('id',$request->search)->get();
    $university= Offer::where('universityname',$request->search)->get();
    $degree= Offer::where('degree',$request->search)->get();
    $percentage= Offer::where('percentage',$request->search)->get();
   
    if(count($id)>0)
    {
        return view('offerorganization.offerlist')->with('offer',$id);
    }
   elseif(count($degree)>0)
   {
    return view('offerorganization.offerlist')->with('offer',$degree);
   }
   elseif(count($university)>0)
   {
    return view('offerorganization.offerlist')->with('offer',$university);
   }
   elseif(count($percentage)>0)
   {
    return view('offerorganization.offerlist')->with('offer',$percentage);
   }
    else{
        return redirect()->route('offer.list'); 
    }
     
 }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
