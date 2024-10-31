<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Models\KategoriProfesi;
use App\Models\Profesi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $loker = Loker::all();
            $kategoriProfesi = KategoriProfesi::all();
            $profesi = Profesi::all();
    
            return view('pages.home', compact('loker', 'kategoriProfesi', 'profesi'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
