<?php

namespace Database\Seeders;

use App\Models\EnrollmentClass;
use App\Models\StudentClass;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentClass::create([
            'user_id' => User::first()->id,
            'enrollment_class_id' => EnrollmentClass::first()->id
        ]);
    }
}
