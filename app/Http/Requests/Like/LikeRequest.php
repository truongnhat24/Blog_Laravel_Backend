<?php

namespace App\Http\Requests\Like;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LikeRequest extends FormRequest
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
            'type_id' => [
                'required',
            ],
            'type' => [
                'required',
                Rule::in(['comment', 'blog'])
            ],
        ];
    }

    public function attributes() {
        return [
            'type_id' => 'Id',
            'type' => 'Type'
        ];
    }

    public function messages() {
        return [
            'type_id.required' => ':attribute wrong',
            'type.required' => ':attribute wrong',
            'type.in' => ':attribute wrong'
        ];
    }    
}
