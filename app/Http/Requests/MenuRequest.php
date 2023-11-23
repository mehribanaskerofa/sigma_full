<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MenuRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'url'=>'string|nullable',
            'active'=>'nullable|boolean',
            'landing'=>'nullable|boolean',
            'parent_id'=>'nullable'
        ];
        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.name"]='nullable';
            $data["$lang.slug"]='nullable';
            $data["$lang.description"]='nullable';

        }
        return $data;
    }
}
