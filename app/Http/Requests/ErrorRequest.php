<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       // return false;
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
            //
            'name'=>'required',
            'email'=>'required|min:15',
            'password'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Name lakho',
            'email.required'=>'email lakho',
            'password.required'=>'password lakho',
        ];
    }
}
