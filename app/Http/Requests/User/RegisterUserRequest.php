<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
            ],
            'email' => [
                'required',
                Rule::unique('users', 'email'),
            ],
            'password' => [
                'required',
                Rule::unique('users', 'phone'),
            ],
            'phone' => [
                'required',
            ],
        ];
    }

    public function attributes() {
        return [
            'email' => 'dia chi email',
            'name' => 'your name',
            'phone' => 'xin sdt',
            'password' => 'nhap mk',
        ];

    }

    public function messages() {
        return [
            'email.required' => ':attribute sai',
            'email.unique' => ':attribute sai',
            'name.required' => ':attribute sai',
            'password.required' => ':attribute sai',
            'phone.required' => ':attribute sai',
            'phone.unique' => ':attribute sai',
        ];

    }

    
}
