<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() == 'hello')
        {
            return true;
        }else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150', 
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' =>'メールは形式通りに入力してください。',
            'age.numeric' => '年齢は数字で記入してください。',
            'age.between' => '年齢は0〜150歳の間で入力してください。。',
            ];
    }
}
