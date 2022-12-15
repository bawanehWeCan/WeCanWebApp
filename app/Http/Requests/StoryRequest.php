<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoryRequest extends FormRequest
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
            'name' => 'required|min:5|max:1000',
            'content' => 'required|min:5|max:10000',
            'image'=>'required_without:id|mimes:jpg,gif,jpeg,png',
            'avater'=>'required_without:id|mimes:jpg,gif,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يرجى ادخال العنوان',
            'content.required' => 'يرجى ادخال المحتوى',
            'name.min' => 'الحد الأدنى للعنوان 5 أحرف',
            'content.min' => 'الحد الأدنى للمحتوى 5 أحرف',
            'name.max' => 'الحد الأقصى للعنوان 5 أحرف',
            'content.max' => 'الحد الأقصى للمحتوى 5 أحرف',
            'image.required_without' => 'يرجى ادخال الصورة',
            'image.mimes' => 'ملف الصورة غير صالح',
            'avater.required_without' => 'يرجى ادخال الصورة الشخصية',
            'avater.mimes' => 'ملف الصورة الشخصية غير صالح',
        ];
    }
}
