<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student_Subject>
 */
class Student_SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'faculty_id'=>rand(1,100),
            'subject_id'=>rand(1,100),
            'student_id'=>rand(1,100),
            'mark'=>$this->faker->numberBetween('0,0','10'),
            'description'=>$this->faker->text(),
        ];
    }
}
