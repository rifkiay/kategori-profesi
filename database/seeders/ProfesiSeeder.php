<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesi;

class ProfesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profesi::create([
            'id_kategori_profesi' => 1, 
            'nama_profesi' => 'Software Engineer',
            'deskripsi_profesi' => 'Bertanggung jawab untuk merancang, mengembangkan, dan memelihara perangkat lunak.',
            'keterampilan' => 'Pemrograman, Pemecahan Masalah, Algoritma',
            'gaji' => 'Rp 15.000.000',
            'gambar_profesi' => 'software_engineer.jpg', 
        ]);

        Profesi::create([
            'id_kategori_profesi' => 2,
            'nama_profesi' => 'UI/UX Designer',
            'deskripsi_profesi' => 'Merancang antarmuka pengguna yang intuitif dan mudah digunakan.',
            'keterampilan' => 'Desain Interaksi, Desain Visual, User Research',
            'gaji' => 'Rp 12.000.000',
            'gambar_profesi' => 'ui_ux_designer.jpg',
        ]);

        Profesi::create([
            'id_kategori_profesi' => 3,
            'nama_profesi' => 'Data Scientist',
            'deskripsi_profesi' => 'Menganalisis data dan membangun model prediksi untuk memberikan insight bisnis.',
            'keterampilan' => 'Statistika, Machine Learning, Data Mining',
            'gaji' => 'Rp 18.000.000',
            'gambar_profesi' => 'data_scientist.jpg',
        ]);
    }
}
