<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EnrollmentClass;

class EnrollmentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EnrollmentClass::create([
            'name' => 'test1'
        ]);

        EnrollmentClass::create([
            'name' => 'test2'
        ]);
    }
}
