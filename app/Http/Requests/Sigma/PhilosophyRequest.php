<?php

namespace App\Http\Requests\Sigma;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PhilosophyRequest extends FormRequest
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
            $data["$lang.name"]='nullable';
            $data["$lang.sub_name"]='nullable';

            $data["$lang.title1"]='nullable';
            $data["$lang.description1"]='nullable';

            $data["$lang.title2"]='nullable';
            $data["$lang.description2"]='nullable';

            $data["$lang.title3"]='nullable';
            $data["$lang.description3"]='nullable';

        }
        return $data;
    }
}
