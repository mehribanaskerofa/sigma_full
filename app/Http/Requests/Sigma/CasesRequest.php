<?php

namespace App\Http\Requests\Sigma;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CasesRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'menu_id'=>'nullable|numeric|exists:menus,id',
            'image'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg,webp'],
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
            $data["$lang.tags"]='nullable';
        }
        return $data;
    }
}
