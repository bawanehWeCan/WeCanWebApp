<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'image'=> 'required'|'image',
            'price' => 'required',
            'feature1' => 'required',
            'feature2'=> 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يرجى ادخال الاسم',
            'image.required' => 'يرجى اختيار صورة  ',
            'price.required' => 'يرجى ادخال السعر',
            'feature1.required' => 'يرجى ادخال الميزة الأول',
            'feature2.required'=> 'يرجى ادخال الميزة الثانية',


        ];
    }
}
