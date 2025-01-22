<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Loker;

class LokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loker::create([
            'id_kategori_profesi' => 1, 
            'id_perusahaan' => 1, 
            'judul' => 'Software Engineer',
            'nama_perusahaan' => 'PT Maju Jaya',
            'deskripsi_loker' => 'Bertanggung jawab untuk mengembangkan perangkat lunak',
            'gaji' => 'Rp 10.000.000',
            'kualifikasi' => 'Sarjana S1 Teknik Informatika atau setara',
            'tanggal_posting' => '2024-10-10',
            'akhir_pendaftaran' => '2024-11-10',
            'status' => 'available',
        ]);

        Loker::create([
            'id_kategori_profesi' => 2,
            'id_perusahaan' => 2,
            'judul' => 'UI/UX Designer',
            'nama_perusahaan' => 'PT Sukses Selalu',
            'deskripsi_loker' => 'Merancang antarmuka pengguna yang menarik dan mudah digunakan',
            'gaji' => 'Rp 8.000.000',
            'kualifikasi' => 'Sarjana S1 Desain Komunikasi Visual atau setara',
            'tanggal_posting' => '2024-10-11',
            'akhir_pendaftaran' => '2024-11-11',
            'status' => 'available',
        ]);

        Loker::create([
            'id_kategori_profesi' => 3,
            'id_perusahaan' => 3,
            'judul' => 'Marketing Specialist',
            'nama_perusahaan' => 'PT Makmur Sejahtera',
            'deskripsi_loker' => 'Membangun strategi pemasaran yang efektif',
            'gaji' => 'Rp 9.000.000',
            'kualifikasi' => 'Sarjana S1 Pemasaran atau setara',
            'tanggal_posting' => '2024-10-12',
            'akhir_pendaftaran' => '2024-11-12',
            'status' => 'closed',
        ]);
    }
}
