<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfesiRequest;
use App\Http\Requests\StoreProfesiRequest;
use App\Models\Profesi;
use App\Models\KategoriProfesi;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProfesiController extends Controller
{
    // Menampilkan profesi yang sesuai dengan kategori_profesi yang dipilih
    public function index($id_kategori)
    {
        try {
            $profesi = Profesi::where('id_kategori_profesi', $id_kategori)->get();

            if ($profesi->isEmpty()) {
                return redirect()->back()->with('error', 'No professions found for this category.');
            }

            return view('profesi.index', compact('profesi'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    // Menampilkan artikel profesi yang sesuai dengan profesi yang dipilih
    public function detail($id_profesi)
    {
        try {
            $profesi = Profesi::where('id', $id_profesi)->get();

            if ($profesi->isEmpty()) {
                return redirect()->back()->with('error', 'No professions found for this category.');
            }

            return view('profesi.index', compact('profesi'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    // ================================================================CRUD===================================================================
    public function view()
    {
        try {
            $profesi = Profesi::all();

            if ($profesi->isEmpty()) {
                return redirect()->back()->with('error', 'No professions found for this category.');
            }

            return view('profesi.show', compact('profesi'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    public function store(StoreProfesiRequest $request)
    {
        try {
            $data = $request->validated();
    
            // Upload gambar jika ada
            if ($request->hasFile('gambar_profesi')) {
                // Ambil nama profesi dan buat nama file
                $profesiName =  Str::slug($data['nama_profesi']); // Ambil nama profesi
                $timestamp = time(); // Ambil timestamp saat ini
                $extension = $request->file('gambar_profesi')->getClientOriginalExtension();
                $fileName = "{$profesiName}_{$timestamp}.{$extension}";

                $data['gambar_profesi'] = $request->file('gambar_profesi')->storeAs('gambar/profesi', $fileName, 'public');
            }
    
            Profesi::create($data);
    
            return redirect()->route('profesi.show')->with('success', 'Profesi berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan Profesi. Silakan coba lagi.');
        }        
    }

    public function show(Profesi $profesi)
    {
        return view('profesi.update', compact('profesi'));
    }

    public function update(UpdateProfesiRequest $request, Profesi $profesi)
    {
        try {
            $data = $request->validated();
    
            // Jika ada gambar baru, hapus yang lama dan upload baru
            if ($request->hasFile('gambar_profesi')) {
                if ($profesi->gambar_profesi) {
                    Storage::delete($profesi->gambar_profesi);
                }

                $profesiName =  Str::slug($data['nama_profesi']); 
                $timestamp = time(); // Ambil timestamp saat ini
                $extension = $request->file('gambar_profesi')->getClientOriginalExtension();
                $fileName = "{$profesiName}_{$timestamp}.{$extension}";

                $data['gambar_profesi'] = $request->file('gambar_profesi')->storeAs('gambar/profesi', $fileName, 'public');
            }
    
            $profesi->update($data);
    
            return redirect()->route('profesi.show')->with('success', 'Profesi berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui Profesi. Silakan coba lagi.');
        }
    }

    public function destroy(Profesi $profesi)
    {
        try {
            if ($profesi->gambar_profesi) {
                Storage::delete($profesi->gambar_profesi);
            }
    
            $profesi->delete();
    
            return redirect()->route('profesi.show')->with('success', 'Profesi berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('profesi.show')->with('error', 'Terjadi kesalahan saat menghapus profesi.');
        }
    }
}
