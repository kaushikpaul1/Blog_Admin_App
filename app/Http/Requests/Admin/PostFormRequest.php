<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules =[
            'category_id'=>[
                'required',
            ],
            'post_name'=>[
                'required',
                'string',
                'max:200'
            ],
            'post_content'=>[
                'required',
                'string'
            ]
        ];
        return $rules;
    }
}