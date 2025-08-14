<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' =>fake()->randomElement(['8000000','900000000','845648912']),
            'location' =>fake()->address(),
            'schedule' => 'Full Time',
            'url' =>fake()->url(),
            'featured' =>false,
        ];
    }
}
