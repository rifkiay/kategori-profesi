<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerusahaanRequest extends FormRequest
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
            'nama_perusahaan' => 'required|string|max:255',
            'logo_perusahaan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'nama_perusahaan.required' => 'Nama perusahaan wajib diisi.',
            'nama_perusahaan.string' => 'Nama perusahaan harus berupa teks.',
            'nama_perusahaan.max' => 'Nama perusahaan tidak boleh lebih dari 255 karakter.',
            'logo_perusahaan.image' => 'Logo perusahaan harus berupa file gambar.',
            'logo_perusahaan.mimes' => 'Logo perusahaan harus berformat JPEG, PNG, atau JPG.',
            'logo_perusahaan.max' => 'Ukuran logo perusahaan tidak boleh lebih dari 2 MB.',
        ];
    }
}
