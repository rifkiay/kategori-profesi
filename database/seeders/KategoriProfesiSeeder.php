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
            ['kategori_profesi' => 'Teknologi Informasi', 'icon' => 'it_icon.png'],
            ['kategori_profesi' => 'Kesehatan', 'icon' => 'health_icon.png'],
            ['kategori_profesi' => 'Pendidikan', 'icon' => 'education_icon.png'],
            ['kategori_profesi' => 'Keuangan', 'icon' => 'finance_icon.png'],
            ['kategori_profesi' => 'Hukum', 'icon' => 'law_icon.png'],
            ['kategori_profesi' => 'Konstruksi', 'icon' => 'construction_icon.png'],
            ['kategori_profesi' => 'Seni dan Desain', 'icon' => 'art_design_icon.png'],
            ['kategori_profesi' => 'Pemasaran', 'icon' => 'marketing_icon.png'],
            ['kategori_profesi' => 'Influencer', 'icon' => 'influencer_icon.png'],
            ['kategori_profesi' => 'Olahraga', 'icon' => 'sports_icon.png'],
        ];
        
        foreach ($kategoriProfesi as $kategori) {
            KategoriProfesi::create($kategori);
        }        
    }
}
