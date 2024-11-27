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
 
            $data['password'] = Hash::make($data['password']);

            User::create($data);
            
            return redirect()->route('auth.login')->with('success', 'Berhasil membuat akun');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat membuat akun. Silakan coba lagi.');
        }
    }
}
