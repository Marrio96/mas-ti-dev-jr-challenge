<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            
            'name'=>'required|min:3',
            'lastName'=>'required|min:4',
            'personal_phone'=>'required|min:10',
            'contact_phone'=>'required|min:10',
            'email'=>'required|email',
            'gender'=>'required',
            'address'=>'required',
            'state'=>'required',
            'city'=>'required',
            'suburb'=>'required',
            'birthdate'=>'required',
            'zipcode'=>'required|min:5',
            'password'=>'min:10'
        ];
    }
}
