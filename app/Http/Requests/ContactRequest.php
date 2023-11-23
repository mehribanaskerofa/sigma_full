<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'phone'=>'required',
            'notice'=>'nullable',
            'active'=>'nullable|boolean'
        ];
        return $data;
    }
}
