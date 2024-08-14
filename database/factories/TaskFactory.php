<?php

namespace Database\Factories;

use DateInterval;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $starts_at = fake()->dateTimeThisYear();
        $ends_at = (clone $starts_at)->add(new DateInterval('P'.rand(1, 2).'W')); 
        //'clone' is a PHP keyword to make a variable copy 
        //'add' is a method from DateTime object 
        //'DateInterval' is object that takes a formater like P for period then the number of week, day, month, etc. 
      
        return [
            'employee_id'=>fake()->numberBetween(2, 15),
            'project_id'=>fake()->numberBetween(1, 6),
            'title'=>fake()->word(),
            'description'=>fake()->sentence(rand(3, 8), true),
            'starts_at'=>$starts_at,
            'ends_at'=>$ends_at,
            'status'=>fake()->randomElement(['Given', 'in_progress', 'Completed']),
        ];
    }
}
