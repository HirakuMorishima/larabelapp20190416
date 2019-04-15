<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    public function authorize()
    {
        if($this->path() == 'test')
        {
            return true;
        }else{
            return false;
    }
}


    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
        ];
    }
    
    public function messages()
    {
        return[
            'name.required' => '名前は入力必須です。',
            'mail.emal' => 'メールは入力必須です。',
            ];
    }
}
