<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;

    protected $table = 'loker';

    protected $fillable = [
        'id_kategori_profesi',
        'id_perusahaan',
        'judul',
        'nama_perusahaan',
        'deskripsi_loker',
        'gaji',
        'kualifikasi',
        'tanggal_posting',
        'akhir_pendaftaran',
        'status',
    ];

    //  Relasi model loker dan perusahaan -> Kolom 'id_perusahaan' pada tabel 'loker' menghubungkan Loker dengan Perusahaan
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
    }
}
