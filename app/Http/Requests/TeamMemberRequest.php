<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamMemberRequest extends FormRequest
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
            'position' => 'required|min:5|max:200',
            'order' => 'required|numeric|min:1|unique:infos,order',
            'image'=>'required_without:id|mimes:jpg,gif,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يرجى ادخال الاسم',
            'position.required' => 'يرجى ادخال المسمى الوظيفي',
            'image.required_without' => 'يرجى ادخال الصورة',
            'image.mimes' => 'ملف الصورة غير صالح',
            'order.required' => 'يرجى ادخال الترتيب',
            'order.unique'=> 'الترتيب موجود بالفعل يرجى إدخال ترتيب جديد',
            'order.min'=> 'هذا الترتيب غير مسموح به',
            'order.numeric' => 'يجب أن يحتوي حقل الترتيب على بيانات رقمية',
            'name.min' => 'الحد الأدنى للاسم 5 أحرف',
            'name.max' => 'الحد الأقصى للاسم 100 أحرف',
            'position.min' => 'الحد الأدنى للمسمى الوظيفي 5 أحرف',
            'position.max' => 'الحد الأقصى للمسمى الوظيفي 100 أحرف',
           
        ];
    }
}
