<?php

namespace App\Http\Controllers;

use App\Models\KategoriProfesi;
use App\Http\Requests\StoreKategoriProfesiRequest;
use Illuminate\Http\Request;

class KategoriProfesiController extends Controller
{
    // =============================================================View User=================================================================
    public function index()
    {
        try {
            $kategoriprofesi = KategoriProfesi::all();

            return view('pages.kategori-profesi', compact('kategoriprofesi'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    // =============================================================CRUD Admin=================================================================
    // All Data
    public function view()
    {
        try {
            $kategori = KategoriProfesi::all();

            return view('kategori_profesi.show', compact('kategori'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    // View create
    public function create()
    {
        return view('kategori_profesi.create');
    }

    public function store(StoreKategoriProfesiRequest $request)
    {
        try {
            $data = $request->validated();

            KategoriProfesi::create($data);

            return redirect()->route('kategori_profesi.view')->with('success', 'Kategori Profesi berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan Kategori Profesi. Silakan coba lagi.');
        }
    }

    public function show(KategoriProfesi $kategoriProfesi)
    {
        return view('kategori_profesi.show', compact('kategori'));
    }

    // View edit
    public function edit(KategoriProfesi $kategoriProfesi)
    {
        return view('kategori_profesi.update', compact('kategoriProfesi'));
    }

    public function update(StoreKategoriProfesiRequest $request, KategoriProfesi $kategoriProfesi)
    {
        try {
            $data = $request->validated();

            $kategoriProfesi->update($data);

            return redirect()->route('kategori_profesi.view')->with('success', 'Kategori Profesi berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui Kategori Profesi. Silakan coba lagi.');
        }
    }

    public function destroy(KategoriProfesi $kategoriProfesi)
    {
        try {
            $kategoriProfesi->delete();

            return redirect()->route('kategori_profesi.view')->with('success', 'Kategori Profesi berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus Kategori Profesi. Silakan coba lagi.');
        }
    }
}
