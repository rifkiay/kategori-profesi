<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'id_kategori_profesi' => 'sometimes|nullable|integer|exists:kategori_profesi,id',
            'nama' => 'sometimes|string|max:255',
            'username' => 'sometimes|string|max:255|unique:users,username',
            'email' => 'sometimes|email|max:255|unique:users,email',
            'email_verified_at' => 'sometimes|nullable|date',
            'password' => 'sometimes|string|min:8',
            // 'password' => 'sometimes|string|min:8|confirmed',
            'minat' => 'sometimes|nullable|string|max:500',
            'bio' => 'sometimes|nullable|string|max:1000',
            'foto_profile' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
