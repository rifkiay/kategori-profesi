<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLokerRequest extends FormRequest
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
            'id_kategori_profesi' => 'nullable|exists:kategori_profesi,id',
            'id_perusahaan' => 'nullable|exists:perusahaan,id',
            'judul' => 'nullable|string|max:255',
            'nama_perusahaan' => 'nullable|string|max:255',
            'deskripsi_loker' => 'nullable|string',
            'gaji' => 'nullable|string|max:255',
            'kualifikasi' => 'nullable|string',
            'tanggal_posting' => 'nullable|date',
            'akhir_pendaftaran' => 'nullable|date|after_or_equal:tanggal_posting',
            'status' => 'nullable|in:available,closed',
        ];
    }

    public function messages(): array
    {
        return [
            'id_kategori_profesi.exists' => 'Kategori profesi tidak ditemukan.',
            'id_perusahaan.exists' => 'Perusahaan tidak ditemukan.',
            'judul.string' => 'Judul pekerjaan harus berupa teks.',
            'judul.max' => 'Judul pekerjaan tidak boleh lebih dari 255 karakter.',
            'status.in' => 'Status hanya bisa memilih antara "available" atau "closed".',
        ];
    }
}
