<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // User::factory()->create([
           // 'name' => 'Test User',
           // 'email' => 'test@example.com',
       // ]);

       DB::table('users')->insert([
        'name' => Str::random(10),
        'username' => 'admin', // Pastikan kolom ini ada di tabel
        'password' => Hash::make('123'),
        'email' => Str::random(10) . '@gmail.com',
        'role' => 'admin',
    ]);

     
    }
}
