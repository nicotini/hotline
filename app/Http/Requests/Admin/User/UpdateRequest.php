<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    { 
       
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,'.$this->user_id,
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer',
            
           
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'This field must be completed',
            'name.string' => 'The data must be a string',
            'email.required' => 'This field must be completed',
            'email.string' => 'This field must be completed',
            'email.email' => 'Your email must be in format as email@some.domain',
            'email.unique' => 'A user with this email address already exists',
        ];
    }
}
