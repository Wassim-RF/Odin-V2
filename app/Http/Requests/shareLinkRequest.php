<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class shareLinkRequest extends FormRequest
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
            'shareLink_user_id' => 'required',
            'shareLink_link_id' => 'required|integer|exists:links,id',
            'shareLink_permission' => 'required|in:editor,viewer'
        ];
    }
}
