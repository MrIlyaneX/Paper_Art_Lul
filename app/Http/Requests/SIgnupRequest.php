<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SIgnupRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required|min:5|max:40',
          'password' => 'required|min:8|max:255',
          'password1' => 'required|same:password',
          'email' => 'required|email'
        ];
    }

    public function messages() {
      return [
        'name.required' => 'Поле имя является обязательным к заполнению',
        'password.required' => 'Поле пароль является обязательным к заполнению',
        'password1.required' => 'Поле повторите пароль является обязательным к заполнению',
        'email.required' => 'Поле email является обязательным к заполнению',
        'email.email' => 'Email введен не верно',
        'name.min' => 'Минимальная длина имени - 5 символов',
        'password.min' => 'Минимальная длина пароля - 8 символов',
        'password.max' => 'Максимальная длина пароля - 255 символов',
        'name.max' => 'Максимальная длина имени - 40 символов',
        'password1.same' => 'Пароли должны совпадать',
      ];
    }
}
