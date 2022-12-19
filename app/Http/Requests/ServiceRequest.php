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
            'price' => 'required|numeric|min:1',
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
            'price.required' => 'يرجى ادخال السعر',
            'price.min' => 'هذا السعر غير مسموح به',
            'price.numeric' => 'يجب أن يحتوي حقل السعر على بيانات رقمية',
            'heading1.required' => 'يرجى ادخال العنوان الأول',
            'content1.required'=> 'يرجى ادخال المحتوى الأول',
            'heading2.required' => 'يرجى ادخال العنوان الثاني',
            'content2.required'=> 'يرجى ادخال المحتوى الثاني',
            'features.required' => 'يرجى ادخال الميزات',

        ];
    }
}
