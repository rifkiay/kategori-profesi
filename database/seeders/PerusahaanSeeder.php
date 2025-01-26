<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perusahaan;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Perusahaan::create([
            'id' => 1,
            'nama_perusahaan' => 'PT Maju Jaya',
            'logo_perusahaan' => 'gambar/perusahaan/PT Maju Jaya/1.png',
        ]);

        Perusahaan::create([
            'id' => 2,
            'nama_perusahaan' => 'PT Sukses Selalu',
            'logo_perusahaan' => 'gambar/perusahaan/PT Sukses Selalu/2.png',
        ]);

        Perusahaan::create([
            'id' => 3,
            'nama_perusahaan' => 'PT Makmur Sejahtera',
            'logo_perusahaan' => 'gambar/perusahaan/PT Makmur Sejahtera/3.png',
        ]);
    }
}
