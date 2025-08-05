<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
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
            'slug' => 'required|string|max:255|unique:pages,slug,' . $this->route('page')->id,
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_data' => 'nullable|array',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'slug.required' => 'Page slug is required.',
            'slug.unique' => 'This slug is already in use.',
            'title.required' => 'Page title is required.',
            'content.required' => 'Page content is required.',
        ];
    }
}