<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' =>[
                'required',
                'string',
                'max:200'
            ],
            'mataTile' =>[
                'required',
                'string',
                'max:200'
            ],
            'image' =>[
                'nullable',
                'mimes:jpeg,jpg,png'
            ],
            'description' =>[
                'nullable',
            ],
            'keywords' =>[
                'required',
                'string'
            ],
        ];
        return $rules;
    }
}
