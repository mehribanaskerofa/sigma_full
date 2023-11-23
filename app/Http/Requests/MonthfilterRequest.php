<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MonthfilterRequest extends FormRequest
{

    public function rules(): array
    {
        $data= [
            'month_img'=> [Rule::requiredIf(request()->method == self::METHOD_POST),'image','mimes:jpg,jpeg,png'],
            'month_date'=>'nullable',
        ];

        return $data;
    }
}
