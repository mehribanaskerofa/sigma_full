<?php

namespace App\Http\Requests\Sigma;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BlogRequest extends FormRequest
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

            $data["$lang.title"]='nullable';
            $data["$lang.description1"]='nullable';
            $data["$lang.description2"]='nullable';
        }
        return $data;
    }
}
