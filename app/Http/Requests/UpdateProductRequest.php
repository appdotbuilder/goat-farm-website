<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|in:goats,milk,processed_products,training_services',
            'price' => 'nullable|numeric|min:0',
            'image_url' => 'nullable|string|max:255',
            'is_available' => 'boolean',
            'sort_order' => 'integer|min:0',
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
            'name.required' => 'Product name is required.',
            'description.required' => 'Product description is required.',
            'category.required' => 'Product category is required.',
            'category.in' => 'Invalid product category.',
            'price.numeric' => 'Price must be a valid number.',
            'price.min' => 'Price cannot be negative.',
        ];
    }
}