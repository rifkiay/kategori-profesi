<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Models\KategoriProfesi;
use App\Models\Profesi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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

    public function about(){
        return view('pages.about');
    }

    public function profesi(){
        return view('pages.profesi');
    }

    public function profesidetail($id){
        try {
            $profesi = Profesi::where('id', $id)->get();

            return view('pages.detail-profesi', compact( 'profesi'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    public function kategori($id){
        try {
            $kategoriprofesi = KategoriProfesi::where('id', $id)->get();

            return view('pages.kategori-profesi', compact('kategoriprofesi'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    public function contact(){
        return view('pages.contact');
    }

    public function loker(){
        return view('pages.loker');
    }

        public function lokerDetail($id)
    {
        try {
            $lokerItem = Loker::findOrFail($id); 
            return view('pages.detail-loker', compact('lokerItem')); // Adjusted to the new file name
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }
}
