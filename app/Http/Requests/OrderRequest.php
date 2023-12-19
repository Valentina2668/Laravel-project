<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
     //логика для requesta вернет tru or false. 
    // If true - данное действие (валидация) разрешено для  текущего пользователя
    // если false - работать не будет 
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //правило валидации пишем сюда
            'name'=>'required',
            'email'=>'required|email',
            'phone' => 'required|min:3|max:20|not_regex:/[a-Я]/',
        ];

    }
}
