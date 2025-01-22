<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLokerRequest extends FormRequest
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
            'id_perusahaan' => 'required|exists:perusahaan,id',
            'judul' => 'required|string|max:255',
            'nama_perusahaan' => 'required|string|max:255',
            'deskripsi_loker' => 'required|string',
            'gaji' => 'required|string|max:255',
            'kualifikasi' => 'required|string',
            'tanggal_posting' => 'required|date',
            'akhir_pendaftaran' => 'required|date|after_or_equal:tanggal_posting',
            'status' => 'required|in:available,closed',
        ];
    }

    public function messages(): array
    {
        return [
            'id_kategori_profesi.required' => 'Kategori profesi wajib dipilih.',
            'id_perusahaan.required' => 'Perusahaan wajib dipilih.',
            'judul.required' => 'Judul pekerjaan wajib diisi.',
            'nama_perusahaan.required' => 'Nama perusahaan wajib diisi.',
            'deskripsi_loker.required' => 'Deskripsi pekerjaan wajib diisi.',
            'gaji.required' => 'Gaji wajib diisi.',
            'kualifikasi.required' => 'Kualifikasi wajib diisi.',
            'tanggal_posting.required' => 'Tanggal posting wajib diisi.',
            'akhir_pendaftaran.required' => 'Akhir pendaftaran wajib diisi.',
            'akhir_pendaftaran.after_or_equal' => 'Akhir pendaftaran harus setelah atau sama dengan tanggal posting.',
            'status.required' => 'Status wajib dipilih.',
            'status.in' => 'Status hanya bisa memilih antara "available" atau "closed".',
        ];
    }
}
