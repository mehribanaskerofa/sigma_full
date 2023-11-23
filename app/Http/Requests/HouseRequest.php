<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HouseRequest extends FormRequest
{
    public function rules(): array
    {

        $data= [
            'type'=>'string',
            'floor'=>'nullable|numeric|min:0',
            'room'=>'nullable|numeric|min:0',
            'area'=>'nullable|string',
            'date'=>'date',
//            'project_id'=>'numeric|exists:projects,id',
            'block_id'=>'numeric|exists:blocks,id',
            'active'=>'nullable|boolean',
            'image'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg,webp'],
            'layout'=>[Rule::requiredIf(request()->method==self::METHOD_POST),'image','mimes:jpg,jpeg,png,svg,webp'],
        ];
//                dd(request()->toArray());
        return $this->mapLanguageValidations($data);
    }
    private function mapLanguageValidations($data){
        foreach (config('app.languages') as $lang){
            $data[$lang]='required|array';
            $data["$lang.title"]='string';
            $data["$lang.description"]='string';
            $data["$lang.price"]='string';
        }
        return $data;
    }
}
