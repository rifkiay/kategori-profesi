<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'id_kategori_profesi' => 'nullable|integer|exists:kategori_profesi,id',
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'email_verified_at' => 'nullable|date',
            // 'password' => 'required|string|min:8|confirmed',
            'password' => 'required|string|min:8',
            'minat' => 'nullable|string|max:500',
            'bio' => 'nullable|string|max:1000',
            'foto_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'id_kategori_profesi.integer' => 'ID kategori profesi harus berupa angka.',
            'id_kategori_profesi.exists' => 'ID kategori profesi tidak valid atau tidak ditemukan.',
            'nama.required' => 'Nama wajib diisi.',
            'nama.string' => 'Nama harus berupa teks.',
            'nama.max' => 'Nama tidak boleh lebih dari 255 karakter.',
            'username.required' => 'Username wajib diisi.',
            'username.string' => 'Username harus berupa teks.',
            'username.max' => 'Username tidak boleh lebih dari 255 karakter.',
            'username.unique' => 'Username sudah digunakan. Harap pilih username lain.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
            'email.unique' => 'Email sudah terdaftar. Gunakan email lain.',
            'email_verified_at.date' => 'Tanggal verifikasi email harus berupa format tanggal yang valid.',
            'password.required' => 'Password wajib diisi.',
            'password.string' => 'Password harus berupa teks.',
            'password.min' => 'Password harus memiliki minimal 8 karakter.',
            'minat.string' => 'Minat harus berupa teks.',
            'minat.max' => 'Minat tidak boleh lebih dari 500 karakter.',
            'bio.string' => 'Bio harus berupa teks.',
            'bio.max' => 'Bio tidak boleh lebih dari 1000 karakter.',
            'foto_profile.image' => 'Foto profil harus berupa file gambar.',
            'foto_profile.mimes' => 'Foto profil harus memiliki format jpeg, png, jpg, atau gif.',
            'foto_profile.max' => 'Ukuran foto profil tidak boleh lebih dari 2048 kilobyte.',
        ];
    }
}
