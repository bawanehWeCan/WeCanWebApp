<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'images'=>'required|array|min:1',
            'images.*'=>'required|mimes:jpg,jpeg,gif,png',
            'project_id' => 'required|exists:projects,id',
        ];
    }

    public function messages()
    {
        return [
            'project_id.required' => 'يرجى ادخال المشروع',
            'project_id.exists' => 'المشروع ليست موجودة',
            'images.mimes' => 'هناك ملفات غير صالحة',
            'images.required' => 'يرجى إدخال الصور',
            'images.min' => 'يرجى إدخال صورة واحدة على الأقل',

        ];
    }
}
