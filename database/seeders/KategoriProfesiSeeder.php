<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriProfesi;

class KategoriProfesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriProfesi = [
            ['kategori_profesi' => 'Teknologi Informasi', 'icon' => 'mdi mdi-desktop-classic'],
            ['kategori_profesi' => 'Kesehatan', 'icon' => 'mdi mdi-heart-pulse'],
            ['kategori_profesi' => 'Pendidikan', 'icon' => 'mdi mdi-school'],
            ['kategori_profesi' => 'Keuangan', 'icon' => 'mdi mdi-cash-multiple'],
            ['kategori_profesi' => 'Hukum', 'icon' => 'mdi mdi-gavel'],
            ['kategori_profesi' => 'Konstruksi', 'icon' => 'mdi mdi-office-building'],
            ['kategori_profesi' => 'Seni dan Desain', 'icon' => 'mdi mdi-palette'],
            ['kategori_profesi' => 'Pemasaran', 'icon' => 'mdi mdi-bullhorn'],
            ['kategori_profesi' => 'Influencer', 'icon' => 'mdi mdi-account-group'],
            ['kategori_profesi' => 'Olahraga', 'icon' => 'mdi mdi-soccer'],
        ];
        
        foreach ($kategoriProfesi as $kategori) {
            KategoriProfesi::create($kategori);
        }        
    }
}