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
    public function index($kategori_profesi)
    {
        try {
            // Mengambil data kategori berdasarkan slug dari nama kategori
            $kategoriData = KategoriProfesi::where('kategori_profesi', 'LIKE', str_replace('-', ' ', $kategori_profesi))->first();

            if (!$kategoriData) {
                return redirect()->back()->with('error', 'Kategori tidak ditemukan.');
            }

            $kategori = KategoriProfesi::all();
            $profesi = Profesi::where('id_kategori_profesi', $kategoriData->id)->get();

            return view('pages.profesi', compact('kategori', 'profesi'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    // Menampilkan artikel profesi yang sesuai dengan profesi yang dipilih
    public function detail($id)
    {
        try {
            $profesi = Profesi::where('id', $id)->get();

            return view('pages.detail-profesi', compact( 'profesi'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    // ================================================================CRUD===================================================================
    public function view()
    {
        try {
            $profesi = Profesi::all();

            return view('profesi.show', compact('profesi'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    public function create()
    {
        return view('Profesi.createProfesi');
    }

    public function store(StoreProfesiRequest $request)
    {
        try {
            $data = $request->validated();

            if ($request->hasFile('gambar_profesi')) {
                $profesiName =  Str::slug($data['nama_profesi']); // Ambil nama profesi
                $timestamp = time(); // Ambil timestamp saat ini
                $extension = $request->file('gambar_profesi')->getClientOriginalExtension();
                $fileName = "{$profesiName}_{$timestamp}.{$extension}";

                $data['gambar_profesi'] = $request->file('gambar_profesi')->storeAs("gambar/profesi/{$data['nama_profesi']}", $fileName, 'public');
            }

            Profesi::create($data);

            return redirect()->route('profesi.view')->with('success', 'Profesi berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan Profesi. Silakan coba lagi.');
        }
    }

    public function show(Profesi $profesi)
    {
        return view('profesi.detail', compact('profesi'));
    }

    public function edit(Profesi $profesi)
    {
        return view('Profesi.updateProfesi', compact('profesi'));
    }

    public function update(UpdateProfesiRequest $request, Profesi $profesi)
    {
        try {
            $data = $request->validated();
            // Jika ada gambar baru, hapus yang lama dan upload baru
            if ($request->hasFile('gambar_profesi')) {
                if ($profesi->gambar_profesi) {
                    Storage::disk('public')->delete($profesi->gambar_profesi);
                }

                $profesiName =  Str::slug($data['nama_profesi']);
                $timestamp = time(); // Ambil timestamp saat ini
                $extension = $request->file('gambar_profesi')->getClientOriginalExtension();
                $fileName = "{$profesiName}_{$timestamp}.{$extension}";

                $data['gambar_profesi'] = $request->file('gambar_profesi')->storeAs("gambar/profesi/{$data['nama_profesi']}", $fileName, 'public');
            }

            $profesi->update($data);

            return redirect()->route('profesi.view')->with('success', 'Profesi berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui Profesi. Silakan coba lagi.');
        }
    }

    public function destroy(Profesi $profesi)
    {
        try {
            if ($profesi->gambar_profesi) {
                Storage::disk('public')->delete($profesi->gambar_profesi);
            }

            $profesi->delete();

            return redirect()->route('profesi.view')->with('success', 'Profesi berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('profesi.view')->with('error', 'Terjadi kesalahan saat menghapus profesi.');
        }
    }
}
