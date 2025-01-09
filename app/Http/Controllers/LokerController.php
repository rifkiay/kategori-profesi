<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Http\Requests\StoreLokerRequest;
use App\Http\Requests\UpdateLokerRequest;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    public function index()
    {
        $loker = Loker::all();
        return view('loker.index', compact('loker'));
    }

    public function create()
    {
        return view('loker.createLoker');
    }

    public function store(StoreLokerRequest $request)
    {
        Loker::create($request->validated());
        return redirect()->route('loker.index')->with('success', 'Lowongan berhasil ditambahkan.');
    }

    public function show(Loker $loker)
    {
        return view('loker.index', compact('loker'));
    }

    public function edit(Loker $loker)
    {
        return view('loker.updateloker', compact('loker'));
    }

    public function update(UpdateLokerRequest $request, Loker $loker)
    {
        $loker->update($request->validated());
        return redirect()->route('loker.index')->with('success', 'Lowongan berhasil diperbarui.');
    }

    public function destroy(Loker $loker)
    {
        $loker->delete();
        return redirect()->route('loker.index')->with('success', 'Lowongan berhasil dihapus.');
    }
}
