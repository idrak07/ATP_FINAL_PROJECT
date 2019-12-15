<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',            
            'addressline'=>'required',
            'city'=>'required',
            'postal'=>'required',
            'country'=>'required',
            'email'=>'required|email',
            'contact'=>'required',            
            'username'=>'required|unique:users,username',
            'password'=>'required|min:4|max:8',
            'repeatpassword' => 'same:password',
            'approval'=>'required|mimes:pdf',
            'information'=>'required|mimes:pdf',
           
        ];
    }
    public function messages(){

        return [
            'name.required'=>'Organization name field is required!!!',
            'addressline.required'=>'Address line field is required!!!',
            'city.required'=>'city line field is required!!!',
            'country.required'=>'country field is required!!!',
            'city.required'=>'city line field is required!!!',
            'email.required'=>'Email field cant left empty!',
            'email.email'=>'Email must be @gmail.com !',
            'contact.required'=>'Enter Phone number field cant left empty!',
            'username.required'=>'Username field is required!!!',
            'password.required'=>'passward field cant left empty!',            
            'password.max'=>':attribute Opps max password 8 length!!!'
        ];
    }
}
