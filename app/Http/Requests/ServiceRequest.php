<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'image'=> 'required',
            'price' => 'required|integer',
            'heading1' => 'required',
            'content1'=> 'required',
            'heading2' => 'required',
            'content2'=> 'required',
            'features' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يرجى ادخال اسم الخدمة',
            'name.required' => 'يرجى اختيار صورة  ',
            'price.required' => 'يرجى ادخال السعر',
            'heading1.required' => 'يرجى ادخال العنوان الأول',
            'content1.required'=> 'يرجى ادخال المحتوى الأول',
            'heading2.required' => 'يرجى ادخال العنوان الثاني',
            'content2.required'=> 'يرجى ادخال المحتوى الثاني',
            'features.required' => 'يرجى ادخال الميزات',

        ];
    }
}
