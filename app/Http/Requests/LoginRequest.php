<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'id' => 'required',
          'password' => 'required',

        ];
    }

    public function messages()
    {
      return[
        'id.required' => 'IDを入力してください。',
        'password.required' => 'パスワードを入力してください。',
      ];
    }
}
