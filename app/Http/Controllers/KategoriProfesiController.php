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
            $kategori = KategoriProfesi::all();
    
            return view('kategori_profesi.index', compact('kategori'));
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
    
            return redirect()->route('kategori_profesi.show')->with('success', 'Kategori Profesi successfully created.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create Kategori Profesi: ' . $e->getMessage());
        }
    }

    public function show(KategoriProfesi $kategoriProfesi)
    {
        return view('kategori_profesi.show', compact('profesi'));
    }

    public function update(StoreKategoriProfesiRequest $request, KategoriProfesi $kategoriProfesi)
    {
        try {
            $data = $request->validated();

            $kategoriProfesi->update($data);
    
            return redirect()->route('kategori_profesi.show')->with('success', 'Kategori Profesi successfully updated.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update Kategori Profesi: ' . $e->getMessage());
        }
    }

    public function destroy(KategoriProfesi $kategoriProfesi)
    {
        try {
            $kategoriProfesi->delete();
    
            return redirect()->route('kategori_profesi.show')->with('success', 'Kategori Profesi successfully deleted.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete Kategori Profesi: ' . $e->getMessage());
        }
    }
}
