<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
            'title' => 'required|min:5|max:1000',
            'content' => 'required|min:5|max:10000',
            'order' => 'required|numeric|min:1|unique:infos,order',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'يرجى ادخال العنوان',
            'content.required' => 'يرجى ادخال المحتوى',
            'order.required' => 'يرجى ادخال الترتيب',
            'order.unique'=> 'الترتيب موجود بالفعل يرجى إدخال ترتيب جديد',
            'order.min'=> 'هذا الترتيب غير مسموح به',
            'order.numeric' => 'يجب أن يحتوي حقل الترتيب على بيانات رقمية',
            'title.min' => 'الحد الأدنى للعنوان 5 أحرف',
            'content.min' => 'الحد الأدنى للمحتوى 5 أحرف',
            'title.max' => 'الحد الأقصى للعنوان 5 أحرف',
            'content.max' => 'الحد الأقصى للمحتوى 5 أحرف',
        ];
    }
}
