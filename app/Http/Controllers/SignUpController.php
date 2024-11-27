<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class SignUpController extends Controller
{
    public function index(){
        return view('auth.sign-up');
    }

    public function store(StoreSignUpRequest $request)
    {
        try {
            $data = $request->validated();

            if ($request->hasFile('foto_profile')) {
                // Ambil nama dari 'nama' untuk digunakan dalam penamaan file
                $namaProfile = $data['nama']; // Ambil nama pengguna dari data
                $timestamp = time(); // Ambil timestamp saat ini
                $extension = $request->file('foto_profile')->getClientOriginalExtension(); // Ekstensi file
                $fileName = Str::slug($namaProfile) . "_{$timestamp}.{$extension}"; // Nama file unik
            
                // Menyimpan file dengan path yang sesuai, dan menggunakan disk 'public'
                $data['foto_profile'] = $request->file('foto_profile')->storeAs("gambar/profiles/{$namaProfile}", $fileName, 'public');
            }
 
            $data['password'] = Hash::make($data['password']);

            User::create($data);
            
            return redirect()->route('auth.login')->with('success', 'Berhasil membuat akun');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat membuat akun. Silakan coba lagi.');
        }
    }
}
