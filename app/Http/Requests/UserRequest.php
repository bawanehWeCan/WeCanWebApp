<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email|unique:users',
            'password' => ['required', Password::min(8)
            ->mixedCase()
            ->letters()
            ->numbers()
            ->symbols()
            ->uncompromised(),],
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'يرجي ادخال اسم المستخدم',
            'email.unique' =>'البريد الإلكتروني مسجل مسبقا',
            'email.required' =>'يرجي ادخال البريد الإلكتروني',
            'email.email'=>'يرجى إدخال البريد الإلكتروني بشكل صحيح',
            'password.required'=>'يرجى إدخال كلمة المرور',
            'password.min'=>'يجب أن تحتوي كلمة المرور على 8 أحرف على الأقل',
        ];
    }

}
