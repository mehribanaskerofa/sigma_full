<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InfrastructureRequest extends FormRequest
{
    public function rules(): array
    {
//        dd(request()->toArray());
        $data= [
            'latitude'=>'required',
            'longitude'=>'required',
            'infrastructures_type_id'=>'required|exists:infra_type,id',
            'active'=>'nullable|boolean',

        ];
        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.title"]='required|string|min:2';
            $data["$lang.description"]='string';
        }
        return $data;
    }
}
