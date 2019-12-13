<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'designation' =>  ['required', 'string', 'max:20'],
            'address' =>  ['required', 'string', 'max:300'],
            'mobile' =>  ['required','numeric' ,'digits:10'],
            'salary' => ['required','numeric','regex:/[\d]{2}.[\d]{2}/'],
            'role' =>  ['required']
        ];
    }
}
