<?php

namespace App\Http\Requests\Landing;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoryRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'icon1'=>'nullable',
            'icon2'=>'nullable',
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
            $data["$lang.description1"]='nullable';
            $data["$lang.tag1"]='nullable';
            $data["$lang.title2"]='nullable';
            $data["$lang.description2"]='nullable';
            $data["$lang.tag2"]='nullable';

        }
        return $data;
    }
}
