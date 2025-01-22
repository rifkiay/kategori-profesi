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

    public function messages(): array
    {
        return [
            'id_kategori_profesi.required' => 'ID kategori profesi wajib diisi.',
            'id_kategori_profesi.exists' => 'ID kategori profesi tidak valid atau tidak ditemukan.',
            'nama_profesi.required' => 'Nama profesi wajib diisi.',
            'nama_profesi.string' => 'Nama profesi harus berupa teks.',
            'nama_profesi.max' => 'Nama profesi tidak boleh lebih dari 255 karakter.',
            'deskripsi_profesi.required' => 'Deskripsi profesi wajib diisi.',
            'deskripsi_profesi.string' => 'Deskripsi profesi harus berupa teks.',
            'keterampilan.required' => 'Keterampilan wajib diisi.',
            'keterampilan.string' => 'Keterampilan harus berupa teks.',
            'gaji.required' => 'Gaji wajib diisi.',
            'gaji.string' => 'Gaji harus berupa teks.',
            'gambar_profesi.image' => 'Gambar profesi harus berupa file gambar.',
            'gambar_profesi.mimes' => 'Gambar profesi harus memiliki format jpg, jpeg, atau png.',
            'gambar_profesi.max' => 'Ukuran gambar profesi tidak boleh lebih dari 2048 kilobyte.',
        ];
    }
}
