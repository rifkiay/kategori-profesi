<?php

namespace App\Http\Controllers;

use App\Models\Profesi;
use App\Models\KategoriProfesi;
use Illuminate\Http\Request;

class ProfesiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesi $profesi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profesi $profesi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesi $profesi)
    {
        //
    }
}
