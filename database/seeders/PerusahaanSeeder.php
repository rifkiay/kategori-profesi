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
            'logo_perusahaan' => 'maju_jaya_logo.png',
        ]);

        Perusahaan::create([
            'id' => 2,
            'nama_perusahaan' => 'PT Sukses Selalu',
            'logo_perusahaan' => 'sukses_selalu_logo.png',
        ]);

        Perusahaan::create([
            'id' => 3,
            'nama_perusahaan' => 'PT Makmur Sejahtera',
            'logo_perusahaan' => 'makmur_sejahtera_logo.png',
        ]);
    }
}
