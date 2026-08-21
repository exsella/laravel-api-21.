<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     */
    public function rules(): array
    {
        if ($this->isMethod('PATCH')) {
            return [
                'name' => 'sometimes|string|max:100',
                'price' => 'sometimes|numeric',
                'description' => 'nullable|string',
                'stock' => 'sometimes|integer|min:0',
                'id_kategori' => 'sometimes|exists:kategoris,id',
            ];
        }

        return [
            'name' => 'required|string|max:100',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'stock' => 'required|integer|min:0',
            'id_kategori' => 'required|exists:kategoris,id',
        ];
    }
}