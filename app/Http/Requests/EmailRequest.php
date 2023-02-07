<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
            'name'=>['required','max:255','regex:/^[a-zA-Z]+$'],
            'phone'=>['required','min:11','numeric'],
            'email'=>['required','max:255','unique:users','regex:/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$'],
            'password'=>['required','min:8','max:16','regex:/^[a-zA-Z0-9]'],
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'يرجي ادخال اسم المستخدم ',
            'name.max:255' =>'من فضلك ادخل الاسم الصحيح',
            'phone.required'=>'يرجي ادخال رقم الهاتف',
            'phone.numeric'=>'يجب ان يحتوي رقم الهاتف علي ارقام فقط',
            'phone.min:11' =>'يرجي ادخال رقم الهاتف الصحيح',
            'email.required'=>'يرجي ادخال الايميل الخاص بك',
            'email.max:255' =>'من فضلك ادخل الايميل بشكل صحيح',
            'email.unique:users'=>'هذا الايميل خاطئ',
            'password.required'=>'من فضلك ادخل كلمة السر',
            'password.min:8'=>'يجب الا تقل كلمة السر عن 8 احرف',
            'phone.max:16' =>'يجب الا تزيد كلمة السر عن 16 حرف',


        ];
    }
}
