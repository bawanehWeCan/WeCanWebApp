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
            'name' => 'required|min:5|max:1000',
            'content' => 'required|min:5|max:10000',
            'feature1' => 'required',
            'feature2' => 'required',
            'content' => 'required|min:5|max:10000',
            'subscription' => 'required|min:5|max:100',
            'service_id' => 'required|exists:services,id',
            'price' => 'required|numeric|min:1',
            'image'=>'required_without:id|mimes:jpg,gif,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يرجى ادخال العنوان',
            'content.required' => 'يرجى ادخال المحتوى',
            'subscription.required' => 'يرجى ادخال الإشتراك',
            'service_id.required' => 'يرجى ادخال الخدمة',
            'service_id.exists' => 'الخدمة ليست موجودة',
            'name.min' => 'الحد الأدنى للعنوان 5 أحرف',
            'content.min' => 'الحد الأدنى للمحتوى 5 أحرف',
            'name.max' => 'الحد الأقصى للعنوان 5 أحرف',
            'content.max' => 'الحد الأقصى للمحتوى 5 أحرف',
            'subscription.min' => 'الحد الأدنى للإشتراك 5 أحرف',
            'subscription.max' => 'الحد الأقصى للإشتراك 100 أحرف',
            'price.required' => 'يرجى ادخال السعر',
            'price.min' => 'هذا السعر غير مسموح به',
            'price.numeric' => 'يجب أن يحتوي حقل السعر على بيانات رقمية',
            'image.required_without' => 'يرجى ادخال الصورة',
            'image.mimes' => 'ملف الصورة غير صالح',
        ];
    }
}
