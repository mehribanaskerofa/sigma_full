<?php

namespace App\Http\Requests\Landing;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HeroRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'sub_name1'=>'nullable',
            'sub_name2'=>'nullable',
            'sub_name3'=>'nullable',
            'video'=>'nullable',
            'image'=>'nullable',
        ];

        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.name"]='nullable';
            $data["$lang.sub_name"]='nullable';

            $data["$lang.title"]='nullable';
            $data["$lang.description"]='nullable';

            $data["$lang.title1"]='nullable';
            $data["$lang.title2"]='nullable';
            $data["$lang.title3"]='nullable';

        }
        return $data;
    }
}
