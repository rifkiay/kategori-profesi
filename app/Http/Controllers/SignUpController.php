<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSignUpRequest;
use App\Models\KategoriProfesi;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function index()
    {
        $kategori_profesi = KategoriProfesi::all();
        return view('Auth.Sign-up', compact('kategori_profesi'));
    }

    public function store(StoreSignUpRequest $request)
    {
        try {
            $data = $request->validated();
            $data['password'] = Hash::make($data['password']);
            User::create($data);

            return redirect()->route('login.index')->with('success', 'Account successfully created. Please log in.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An error occurred while creating the account.']);
        }
    }
}
