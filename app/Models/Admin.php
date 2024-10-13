<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

     protected $table = 'admin';

     protected $fillable = [
         'nama',
         'username',
         'email',
         'password',
         'foto_profile',
     ];
 
     // Mengamankan password dengan hash saat model dibuat
     protected static function boot()
     {
         parent::boot();
 
         static::creating(function ($admin) {
             // Pastikan password di-hash sebelum disimpan
             if (isset($admin->password)) {
                 $admin->password = bcrypt($admin->password);
             }
         });
     }
}
