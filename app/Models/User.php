<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'id_kategori_profesi',
        'nama',
        'username',
        'email',
        'email_verified_at',
        'password',
        'minat',
        'bio',
        'foto_profile',
    ];

    protected $hidden = [
       'password',
       'remember_token',
    ];

    public function kategoriPerusahaan()
    {
        return $this->belongsTo(KategoriProfesi::class, 'id_kategori_profesi');
    }
}