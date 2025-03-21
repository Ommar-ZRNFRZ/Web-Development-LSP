<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Aplikasi',
            'username' => 'Admin',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'User Retribusi',
            'username' => 'User',
            'level' => 'wajib',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'remember_token' => Str::random(60),
        ]);
    }
}