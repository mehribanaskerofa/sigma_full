<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SliderRequest extends FormRequest
{

    public function rules(): array
    {
        $data= [
            'slider_img'=> [Rule::requiredIf(request()->method == self::METHOD_POST),'image','mimes:jpg,jpeg,png'],
            'button_url'=>'nullable',
        ];

        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.title"]='string';
            $data["$lang.text"]='nullable';
            $data["$lang.button_text"]='nullable';

        }
        return $data;
    }
}
