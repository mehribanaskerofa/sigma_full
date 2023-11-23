<?php

namespace App\Http\Requests\Sigma;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HeadCounterRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'menu_id'=>'nullable|numeric|exists:menus,id',
        ];
        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.title1"]='nullable';
            $data["$lang.title2"]='nullable';
            $data["$lang.title3"]='nullable';
            $data["$lang.sub_title1"]='nullable';
            $data["$lang.sub_title2"]='nullable';
            $data["$lang.sub_title3"]='nullable';
            $data["$lang.name1"]='nullable';
            $data["$lang.name2"]='nullable';
            $data["$lang.name3"]='nullable';
            $data["$lang.counter1"]='nullable';
            $data["$lang.counter2"]='nullable';
            $data["$lang.counter3"]='nullable';

        }
        return $data;
    }
}
