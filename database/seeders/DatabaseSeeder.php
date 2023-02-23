<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Penduduk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Admin',
            'password' => password_hash('12345',PASSWORD_DEFAULT)
        ]);

        Penduduk::factory(10)->create();

        Category::create([
            'name' => 'Kebersihan',
        ]);

        Category::create([
            'name' => 'Keamanan',
        ]);

        Category::create([
            'name' => 'Fasilitas',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
