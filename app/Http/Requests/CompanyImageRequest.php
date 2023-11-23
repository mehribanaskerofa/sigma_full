<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyImageRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'company_id'=>'required|exists:companies,id',
            'active'=>'nullable|boolean',
            'image'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg,webp'],
        ];
        return $data;
    }
}
