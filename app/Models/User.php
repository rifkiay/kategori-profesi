<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user';

     protected $fillable = [
        'id_kategori_profesi',
         'nama',
         'username',
         'email',
         'password',
         'minat',
         'bio',
         'foto_profile',
     ];
 
     // Mengamankan password dengan hash saat model dibuat
     protected static function boot()
     {
         parent::boot();
 
         static::creating(function ($user) {
             // Pastikan password di-hash sebelum disimpan
             if (isset($user->password)) {
                 $user->password = bcrypt($user->password);
             }
         });
     }
}
