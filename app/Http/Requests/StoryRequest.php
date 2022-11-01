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
            'name' => 'required',
            'image'=> 'required'|'image',
            'avater'=> 'required'|'image',
            'content' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'يرجى ادخال الاسم',
            'image.required' => 'يرجى اختيار صورة  ',
            'avater.required' => 'يرجى ادخال الأفاتار',
            'content.required' => 'يرجى ادخال المحتوى',


        ];
    }
}
