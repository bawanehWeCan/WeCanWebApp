<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
            'question' => 'required|min:5|max:1000',
            'answer' => 'required|min:5|max:10000',
            'order' => 'required|numeric|min:1|unique:faqs,order',
        ];
    }

    public function messages()
    {
        return [
            'question.required' => 'يرجى ادخال السؤال',
            'answer.required' => 'يرجى ادخال الإجابة',
            'order.required' => 'يرجى ادخال الترتيب',
            'order.unique'=> 'الترتيب موجود بالفعل يرجى إدخال ترتيب جديد',
            'order.min'=> 'هذا الترتيب غير مسموح به',
            'order.numeric' => 'يجب أن يحتوي حقل الترتيب على بيانات رقمية',
            'question.min' => 'الحد الأدنى للسؤال 5 أحرف',
            'answer.min' => 'الحد الأدنى للإجابة 5 أحرف',
            'question.max' => 'الحد الأقصى للسؤال 5 أحرف',
            'answer.max' => 'الحد الأقصى للإجابة 5 أحرف',
        ];
    }
}
