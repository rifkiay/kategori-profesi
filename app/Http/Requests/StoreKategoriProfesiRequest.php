<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKategoriProfesiRequest extends FormRequest
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
            'kategori_profesi' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'kategori_profesi.required' => 'Kategori profesi wajib diisi.',
            'kategori_profesi.string' => 'Kategori profesi harus berupa teks.',
            'kategori_profesi.max' => 'Kategori profesi tidak boleh lebih dari 255 karakter.',
            'icon.required' => 'Icon wajib diisi.',
        ];
    }
}
