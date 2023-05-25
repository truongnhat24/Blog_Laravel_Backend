<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditRequest extends FormRequest
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
            'content' => [
                'required',
            ]
        ];
    }

    public function attributes() {
        return [
            'content' => 'Nhap content',
        ];
    }

    public function messages() {
        return [
            'content.required' => ':attribute sai'
        ];
    }    
}
