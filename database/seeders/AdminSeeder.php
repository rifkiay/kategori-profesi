<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'nama' => 'Admin Pertama',
            'username' => 'admin',
            'email' => 'admin1@example.com',
            'password' => Hash::make('password123'), 
            'foto_profile' => 'path/to/profile1.jpg',
        ]);
    }
}
