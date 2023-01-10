<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'userName' => 'required|min:3|max:15',
            'userText' => 'required|min:5|max:100'
        ];
    }

    public function attributes()
    {
        return [
            'userName' => 'Имя',
            'userText' => 'сообщение'
        ];
    }

    public function messages()
    {
        return [
            'userName.required' => 'Введите имя',
            'userName.min' => 'Минимальное кол-во символов в имени - 5',
            'userName.max' => 'Максимальное кол-во символов в имени - 15',
            'userText.required' => 'Введите сообщение',
            'userText.min' => 'Минимальное кол-во символов в сообщении - 5',
            'userText.max' => 'Максимальное кол-во символов в сообщении - 100'

        ];
    }
}
