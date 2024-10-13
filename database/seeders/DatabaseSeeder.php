<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // database/seeders/DatabaseSeeder.php
    public function run()
    {
        $this->call(KategoriProfesiSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(PerusahaanSeeder::class);
        $this->call(ProfesiSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LokerSeeder::class);
    }

}
