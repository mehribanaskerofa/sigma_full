<?php

namespace App\Http\Requests\Landing;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Need1Request extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'image'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg,webp'],
        ];

        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.name"]='nullable';
            $data["$lang.sub_name"]='nullable';


            $data["$lang.title1"]='nullable';
            $data["$lang.sub_title1"]='nullable';
            $data["$lang.title2"]='nullable';
            $data["$lang.sub_title2"]='nullable';
            $data["$lang.title3"]='nullable';
            $data["$lang.sub_title3"]='nullable';

        }
        return $data;
    }
}
