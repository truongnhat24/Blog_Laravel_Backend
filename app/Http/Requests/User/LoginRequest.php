<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoginRequest extends FormRequest
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
            'email' => [
                'required',
            ],
            'password' => [
                'required',
            ],
        ];
    }

    public function attributes() {
        return [
            'email' => 'dia chi email',
            'password' => 'nhap mk',
        ];

    }

    public function messages() {
        return [
            'email.required' => ':attribute sai',
            'password.required' => ':attribute sai',
        ];

    }

    
}
