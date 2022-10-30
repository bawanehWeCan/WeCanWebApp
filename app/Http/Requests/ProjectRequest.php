<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
                'image' => 'required'|'image',
                'content' => 'required',


            ];

    }

    public function messages()
    {
        return [
            'name.required' => 'يرجى ادخال اسم المشروع',
            'image.required' => 'يرجى  اختيار صورة',
            'heading1.required' => 'يرجى ادخال المحتوى',


        ];
    }
}
