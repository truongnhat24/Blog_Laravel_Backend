<?php

namespace App\Http\Requests\Blog;

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
            'title' => [
                'required',
            ],
            'content' => [
                'required',
            ],
            'image' => [],
        ];
    }

    public function attributes() {
        return [
            'title' => 'Nhap title',
            'content' => 'Nhap content',
            'image' => 'Chon anh',
        ];
    }

    public function messages() {
        return [
            'title.required' => ':attribute sai',
            'content.required' => ':attribute sai',
            'image.max' => ':attribute sai kich thuoc',
            'image.mimes' => ':attribute sai dinh dang',
        ];
    }    
}
