<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfesiRequest extends FormRequest
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
            'id_kategori_profesi' => 'sometimes|nullable|exists:kategori_profesi,id',
            'nama_profesi' => 'sometimes|nullable|string|max:255',
            'deskripsi_profesi' => 'sometimes|nullable|string',
            'keterampilan' => 'sometimes|nullable|string',
            'gaji' => 'sometimes|nullable|string',
            'gambar_profesi' => 'sometimes|nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'id_kategori_profesi.exists' => 'ID kategori profesi tidak valid atau tidak ditemukan.',
            'nama_profesi.string' => 'Nama profesi harus berupa teks.',
            'nama_profesi.max' => 'Nama profesi tidak boleh lebih dari 255 karakter.',
            'deskripsi_profesi.string' => 'Deskripsi profesi harus berupa teks.',
            'keterampilan.string' => 'Keterampilan harus berupa teks.',
            'gaji.string' => 'Gaji harus berupa teks.',
            'gambar_profesi.image' => 'Gambar profesi harus berupa file gambar.',
            'gambar_profesi.mimes' => 'Gambar profesi harus memiliki format jpg, jpeg, atau png.',
            'gambar_profesi.max' => 'Ukuran gambar profesi tidak boleh lebih dari 2048 kilobyte.',
        ];
    }
}
