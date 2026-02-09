<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class linkRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'link_title' => 'required|string|max:255',
            'link_url' => 'required|url|max:2048',
            'category_id' => 'required|integer|exists:categories,id',
            'link_tag' => 'nullable|array',
            'link_tag.*' => 'exists:tags,id',
            'link_id' => 'nullable|integer'
        ];
    }
}
