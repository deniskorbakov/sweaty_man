<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'userName' => 'required',
            'userEmail' => 'required|email',
            'userText' => 'required|min:5|max:100'
        ];
    }

    public function attributes()
    {
        return [
            'userName' => 'Имя',
            'userEmail' => 'Почта',
            'userText' => 'Сообщение',

        ];
    }

    public function messages()
    {
        return [
            'userName.required' => 'Поле Имя является не заполненным',
            'userEmail.required' => 'Поле Почта является не заполненным',
            'userText.required' => 'Поле Почта является не заполненным',
            'userEmail.email' => 'Не корректный адрес почты',
            'userText.min' => 'Минимальное значение сообщения 5 символов',
            'userText.max' => 'Максимальное значение сообщение 100 символов'

        ];
    }
}
