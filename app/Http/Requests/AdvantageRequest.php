<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AdvantageRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'sort_order' => ['required', 'integer', 'min:1'],
            'is_active' => ['sometimes', 'boolean'],
        ];

        if ($this->isMethod('post')) {
            $rules['icon'] = ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'];
        } else {
            $rules['icon'] = ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'];
        }

        return $rules;
    }
}
