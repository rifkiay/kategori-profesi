<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // =============================================================View User=================================================================
    public function index($id)
    {
        try {
            \Log::info("Mengambil data user dengan ID: $id");
            $user = User::find($id);

            return view('user.detail', compact('user'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    public function detail(User $user)
    {
        \Log::info("Mengambil data user dengan ID: $user");
        return view('users.edit', compact('user'));
    }

    public function edit(UpdateUserRequest $request, User $user)
    {
        try {
            $data = $request->validated();
    
            // Update password if provided
            if ($request->filled('password')) {
                $data['password'] = bcrypt($request->password);
            } else {
                unset($data['password']);
            }

    
            if ($request->hasFile('foto_profile')) {
                if ($user->foto_profile) {
                    Storage::disk('public')->delete($user->foto_profile);
                }
                $userName = Str::slug($data['username']);
                $timestamp = time(); 
                $extension = $request->file('foto_profile')->getClientOriginalExtension();
                $fileName = "{$userName}_{$timestamp}.{$extension}";
    
                $data['foto_profile'] = $request->file('foto_profile')->storeAs("gambar/user/{$data['username']}", $fileName, 'public');
            }

            $user->update($data);
    
            return redirect()->route('users.edit')->with('success', 'User berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui user: ' . $e->getMessage());
        }
    }

    // =============================================================CRUD Admin & User=================================================================
    public function view()
    {
        try {
            $users = User::all();

            return view('User.users', compact('users')); 
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to load data: ' . $e->getMessage());
        }
    }

    public function store(StoreUserRequest $request)
    {
        try {
            $data = $request->validated();
    
            // Enkripsi password
            $data['password'] = bcrypt($request->password);
    
            if ($request->hasFile('foto_profile')) {
                $userName =  Str::slug($data['username']);
                $timestamp = time(); 
                $extension = $request->file('foto_profile')->getClientOriginalExtension();
                $fileName = "{$userName}_{$timestamp}.{$extension}";

                $data['foto_profile'] = $request->file('foto_profile')->storeAs("gambar/user/{$data['username']}", $fileName, 'public');
            }
    
            User::create($data);

            return redirect()->route('admin.users')->with('success', 'User berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan user: ' . $e->getMessage());
        }
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        try {
            $data = $request->validated();
    
            // Update password if provided
            if ($request->filled('password')) {
                $data['password'] = bcrypt($request->password);
            } else {
                unset($data['password']);
            }

    
            if ($request->hasFile('foto_profile')) {
                if ($user->foto_profile) {
                    Storage::disk('public')->delete($user->foto_profile);
                }
                $userName = Str::slug($data['username']);
                $timestamp = time(); 
                $extension = $request->file('foto_profile')->getClientOriginalExtension();
                $fileName = "{$userName}_{$timestamp}.{$extension}";
    
                $data['foto_profile'] = $request->file('foto_profile')->storeAs("gambar/user/{$data['username']}", $fileName, 'public');
            }

            $user->update($data);
    
            return redirect()->route('admin.users')->with('success', 'User berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui user: ' . $e->getMessage());
        }
    }

    public function destroy(User $user)
    {
        try {
            Storage::disk('public')->delete($user->foto_profile);
            
            // Delete the user
            $user->delete();
    
            return redirect()->route('admin.users')->with('success', 'User berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus user: ' . $e->getMessage());
        }
    }
}
