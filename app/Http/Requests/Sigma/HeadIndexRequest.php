<?php

namespace App\Http\Requests\Sigma;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HeadIndexRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
        ];
        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.title"]='nullable';
            $data["$lang.title1"]='nullable';
            $data["$lang.title2"]='nullable';
            $data["$lang.title3"]='nullable';
        }
        return $data;
    }
}
