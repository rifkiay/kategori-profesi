<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSignUpRequest extends FormRequest
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
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            // 'password' => 'required|string|min:8|confirmed',
            'minat' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:500',
            'foto_profile' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'id_kategori_profesi.required' => 'Kategori profesi harus dipilih.',
            'id_kategori_profesi.exists' => 'Kategori profesi yang dipilih tidak valid.',
            'nama.required' => 'Nama harus diisi.',
            'username.required' => 'Username harus diisi.',
            'username.unique' => 'Username sudah digunakan.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password harus minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'minat.string' => 'Minat harus berupa teks.',
            'bio.string' => 'Bio harus berupa teks.',
            'foto_profile.image' => 'Foto profil harus berupa gambar.',
            'foto_profile.mimes' => 'Foto profil harus memiliki ekstensi jpg, png, atau jpeg.',
            'foto_profile.max' => 'Ukuran foto profil maksimal 2MB.',
        ];
    }
}
