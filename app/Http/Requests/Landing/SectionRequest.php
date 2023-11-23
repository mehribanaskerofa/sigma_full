<?php

namespace App\Http\Requests\Landing;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SectionRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'video_url'=>'nullable',
            'image'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg,webp'],
        ];

        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';


            $data["$lang.title"]='nullable';
            $data["$lang.sub_title"]='nullable';
            $data["$lang.description"]='nullable';
            $data["$lang.btn"]='nullable';
        }
        return $data;
    }
}
