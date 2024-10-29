<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfesiRequest extends FormRequest
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
            'id_kategori_profesi' => 'required|exists:kategori_profesi,id',
            'nama_profesi' => 'required|string|max:255',
            'deskripsi_profesi' => 'required|string',
            'keterampilan' => 'required|string',
            'gaji' => 'required|string',
            'gambar_profesi' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
