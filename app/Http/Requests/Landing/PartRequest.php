<?php

namespace App\Http\Requests\Landing;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PartRequest extends FormRequest
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
            $data["$lang.description1"]='nullable';
            $data["$lang.title2"]='nullable';
            $data["$lang.description2"]='nullable';
            $data["$lang.title3"]='nullable';
            $data["$lang.description3"]='nullable';
            $data["$lang.title4"]='nullable';
            $data["$lang.description4"]='nullable';
            $data["$lang.title5"]='nullable';
            $data["$lang.description5"]='nullable';
            $data["$lang.title6"]='nullable';
            $data["$lang.description6"]='nullable';
            $data["$lang.title7"]='nullable';
            $data["$lang.description7"]='nullable';
        }
        return $data;
    }
}
