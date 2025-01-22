<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePerusahaanRequest;
use App\Http\Requests\UpdatePerusahaanRequest;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PerusahaanController extends Controller
{
    public function index()
    {
        $perusahaans = Perusahaan::all();
        return view('Perusahaan.showPerusahaan', compact('perusahaans'));
    }

    public function create()
    {
        return view('Perusahaan.createPerusahaan');
    }

    public function store(StorePerusahaanRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('logo_perusahaan')) {
            $namaPerusahaan =  Str::slug($data['nama_perusahaan']); // Ambil nama profesi
            $timestamp = time(); // Ambil timestamp saat ini
            $extension = $request->file('logo_perusahaan')->getClientOriginalExtension();
            $fileName = "{$namaPerusahaan}_{$timestamp}.{$extension}";

            $data['logo_perusahaan'] = $request->file('logo_perusahaan')->storeAs("gambar/perusahaan/{$data['nama_perusahaan']}", $fileName, 'public');
        }

        Perusahaan::create($data);

        return redirect()->route('perusahaan.index')->with('success', 'Perusahaan berhasil ditambahkan.');
    }

    public function show(Perusahaan $perusahaan)
    {
        return view('perusahaan.detailperusahaan', compact('perusahaan'));
    }

    public function edit(Perusahaan $perusahaan)
    {
        return view('perusahaan.updatePerusahaan', compact('perusahaan'));
    }

    public function update(UpdatePerusahaanRequest $request, Perusahaan $perusahaan)
    {
        $data = $request->validated();

        if ($request->hasFile('logo_perusahaan')) {
            if ($perusahaan->logo_perusahaan) {
                Storage::disk('public')->delete($perusahaan->logo_perusahaan);
            }

            $namaPerusahaan =  Str::slug($data['nama_perusahaan']); // Ambil nama profesi
            $timestamp = time(); // Ambil timestamp saat ini
            $extension = $request->file('logo_perusahaan')->getClientOriginalExtension();
            $fileName = "{$namaPerusahaan}_{$timestamp}.{$extension}";

            $data['logo_perusahaan'] = $request->file('logo_perusahaan')->storeAs("gambar/perusahaan/{$data['nama_perusahaan']}", $fileName, 'public');
        }

        $perusahaan->update($data);

        return redirect()->route('perusahaan.index')->with('success', 'Perusahaan berhasil diperbarui.');
    }

    public function destroy(Perusahaan $perusahaan)
    {
        if ($perusahaan->logo_perusahaan) {
            Storage::disk('public')->delete($perusahaan->logo_perusahaan);
        }
        $perusahaan->delete();

        return redirect()->route('perusahaan.index')->with('success', 'Perusahaan berhasil dihapus.');
    }
}
