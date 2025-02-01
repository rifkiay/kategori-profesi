<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesi extends Model
{
    use HasFactory;

    protected $table = 'profesi';

    protected $fillable = [
        'id_kategori_profesi',
        'nama_profesi',
        'deskripsi_profesi',
        'keterampilan',
        'gaji',
        'gambar_profesi',
    ];

    public function kategoriProfesi()
    {
        return $this->belongsTo(KategoriProfesi::class, 'id_kategori_profesi');
    }
}
