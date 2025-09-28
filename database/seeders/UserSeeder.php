<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'Alif Fikri',
            'email' => 'haykalalif21@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}
