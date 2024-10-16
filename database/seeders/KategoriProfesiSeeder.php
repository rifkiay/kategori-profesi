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
            ['kategori_profesi' => 'Teknologi Informasi'],
            ['kategori_profesi' => 'Kesehatan'],
            ['kategori_profesi' => 'Pendidikan'],
            ['kategori_profesi' => 'Keuangan'],
            ['kategori_profesi' => 'Hukum'],
            ['kategori_profesi' => 'Konstruksi'],
            ['kategori_profesi' => 'Seni dan Desain'],
            ['kategori_profesi' => 'Pemasaran'],
            ['kategori_profesi' => 'Influencer'],
            ['kategori_profesi' => 'Olahraga'],
        ];

        foreach ($kategoriProfesi as $kategori) {
            KategoriProfesi::create($kategori);
        }
    }
}
