<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFrontRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'email'=>'email|required|unique:contacts,email',
        ];
        return $data;
    }
    public function messages()
    {
        return [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'The email address is already in use.',
        ];
    }
}
