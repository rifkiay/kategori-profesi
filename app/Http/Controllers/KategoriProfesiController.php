<?php

namespace App\Http\Controllers;

use App\Models\KategoriProfesi;
use Illuminate\Http\Request;

class KategoriProfesiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $kategori = KategoriProfesi::all();
    
            return view('kategori.index', compact('kategori'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori_profesi' => 'required|string|max:255',
        ]);
    
        try {
            KategoriProfesi::create([
                'kategori_profesi' => $request->kategori_profesi, 
            ]);
    
            return redirect()->route('kategori_profesi.index')->with('success', 'Kategori Profesi successfully created.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create Kategori Profesi: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriProfesi $kategoriProfesi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriProfesi $kategoriProfesi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriProfesi $kategoriProfesi)
    {
        //
    }
}
