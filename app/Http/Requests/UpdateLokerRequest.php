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
            'id_kategori_profesi' => 'required|exists:kategori_profesi,id',
            'id_perusahaan' => 'required|nullable|exists:perusahaan,id',
            'judul' => 'required|string|max:255',
            'nama_perusahaan' => 'nullable|string|max:255',
            'deskripsi_loker' => 'required|nullable|string',
            'gaji' => 'required|nullable|string|max:255',
            'kualifikasi' => 'required|nullable|string',
            'tanggal_posting' => 'nullable|date',
            'akhir_pendaftaran' => 'nullable|date|after_or_equal:tanggal_posting',
            'status' => 'required|nullable|in:available,closed',
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
