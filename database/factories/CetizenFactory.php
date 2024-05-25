<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cetizen>
 */
class CetizenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'image' => fake()->sentence(),
            'fname'=>$fname = fake()->firstName(),
            'lname'=>$fname . '' . fake()->lastName(),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'bod' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'age' => fake()->numberBetween(60, 100),
            'address' => fake()->address(),

        ];
    }
}
