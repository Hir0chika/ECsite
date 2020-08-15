<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourokuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      if ($this -> path() == 'touroku')
      {
        return true;
      } else {
        return false;
      }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'address' => 'required',
            'tel' => 'integer',
            'age' => 'numeric|between:0,150',
            'email' => 'email',
            'id' => 'required',
            'password1' => 'required',
            'password2' => 'required',

        ];
    }

    public function messages()
    {
      return[
        'name.required' => '名前は必ず入力してください。',
        'address.required' => '住所は必ず入力してください。',
        'tel.integer' => '電話番号は整数で入力してください。',
        'age.numeric' => '年齢は整数で記入してください。',
        'age.between' => '年齢は0~150の間で入力してください。',
        'email.email' => 'メールアドレスが必要です。',
        'id.required' => 'IDは必ず入力してください。',
        'password1.required' => 'パスワードは必ず入力してください。',
        'password2.required' => 'パスワード確認用は必ず入力してください。',
      ];
    }
}
