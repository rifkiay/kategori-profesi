<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $loker = Loker::all();
    
            return view('loker.index', compact('loker',));
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
    public function show(Loker $loker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loker $loker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loker $loker)
    {
        //
    }
}
