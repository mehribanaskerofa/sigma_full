<?php

namespace App\Http\Requests\Sigma;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeamRequest extends FormRequest
{
    public function rules(): array
    {
        $data= [
            'team'=>'string',
            'menu_id'=>'nullable|numeric|exists:menus,id',
            'image'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg,webp'],
        ];
        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.fullname"]='nullable';
            $data["$lang.in_url"]='nullable';
            $data["$lang.role"]='nullable';
        }
        return $data;
    }
}
