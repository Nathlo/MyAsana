<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = fake()->numberBetween(2, 15);
       // $name = User::where('id', $user_id)->first()->name;

        return [
            'user_id' =>$user_id,
            'position'=>fake()->word(),
            'phone'=>fake()->phoneNumber(),
            'photo' =>fake()->imageUrl(300, 350, 'test-photo', true)
        ];
    }
}
