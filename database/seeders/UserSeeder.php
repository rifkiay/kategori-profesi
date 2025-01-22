<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id_kategori_profesi' => 1,
            'nama' => 'John Doe',
            'username' => 'johndoe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password123'),
            'minat' => 'Programming, AI',
            'bio' => 'I am a software engineer with a passion for AI and machine learning.',
            'foto_profile' => 'john_doe.jpg',
        ]);

        User::create([
            'id_kategori_profesi' => 2,
            'nama' => 'Jane Smith',
            'username' => 'janesmith',
            'email' => 'janesmith@example.com',
            'password' => Hash::make('securepassword'),
            'minat' => 'UI/UX Design, Visual Arts',
            'bio' => 'A creative UI/UX designer with experience in designing intuitive interfaces.',
            'foto_profile' => 'jane_smith.jpg',
        ]);

        User::create([
            'id_kategori_profesi' => 3,
            'nama' => 'Michael Brown',
            'username' => 'michaelbrown',
            'email' => 'michaelbrown@example.com',
            'password' => Hash::make('mypassword'),
            'minat' => 'Data Science, Machine Learning',
            'bio' => 'I love working with data and developing predictive models.',
            'foto_profile' => 'jane_smith.jpg',
        ]);
    }
}
