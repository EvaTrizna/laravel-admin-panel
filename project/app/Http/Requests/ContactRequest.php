<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //пользователь сможет отправлять данные пока не авторизован
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
            'title'=>'required',
            'text-preview'=>'required|min:15|max:150'
        ];
    }
    /*
    public function attributes(){
        return[
            'name'=>'имя'
        ];
    }*/
    public function messages(){
        return[
            'title.required'=>'Поле имя является обязательным',
          
            'text-preview.required'=>'Поле сообщение является обязательным',
            //не работает, наверное дело в min:5
            //'subject.min:5'=>'В теме должно быть более 5 символов'
        ];
    }
}
