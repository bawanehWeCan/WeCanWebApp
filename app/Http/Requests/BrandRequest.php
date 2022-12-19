<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'name' => 'required|min:5|max:100',
            'image'=>'required_without:id|mimes:jpg,gif,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يرجى ادخال الاسم',
            'image.required_without' => 'يرجى ادخال الصورة',
            'image.mimes' => 'ملف الصورة غير مناسب',
            'name.min' => 'الحد الأدنى للاسم 5 أحرف',
            'name.max' => 'الحد الأقصى للاسم 100 أحرف',
        ];
    }
}
