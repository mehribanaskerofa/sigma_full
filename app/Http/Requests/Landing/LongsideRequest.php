<?php

namespace App\Http\Requests\Landing;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LongsideRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'sub_title1'=>'nullable',
            'sub_title2'=>'nullable',
            'sub_title3'=>'nullable',
            'sub_title4'=>'nullable',
            'image'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg,webp'],
        ];

        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.name"]='nullable';
            $data["$lang.sub_name1"]='nullable';
            $data["$lang.sub_name2"]='nullable';


            $data["$lang.title"]='nullable';

            $data["$lang.title1"]='nullable';
            $data["$lang.title2"]='nullable';
            $data["$lang.title3"]='nullable';
            $data["$lang.title4"]='nullable';

        }
        return $data;
    }
}
