<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'username' => 'zirui',
            'first_name' => 'Yudha',
            'last_name' => 'Sugiharto',
            'email' => 'halo@gmail.com',
            'password' => 'rahasia'
        ]);
    }
}
