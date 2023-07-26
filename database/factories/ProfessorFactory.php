<?php

namespace Database\Factories;

use App\Models\Professor;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Professor::class;
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'name' => $this->faker->lastName(),
            'surname' => $this->faker->lastName(),
            'registration_number' => time().rand(1,2022),
            'date_of_Birth' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
