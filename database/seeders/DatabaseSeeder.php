<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Faculty;
use App\Models\Student;
use App\Models\Student_subject;
use App\Models\Subject;

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


       Faculty::factory(10)->create();
    //    Student::factory(1000)->create();
        // Student_subject::factory(10000)->create();

    }
}
