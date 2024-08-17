<?php

namespace Database\Factories;

use DateInterval;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $starts_at = fake()->dateTimeThisYear();
        $ends_at = (clone $starts_at)->add(new DateInterval('P'.rand(3, 4).'M')); 
        //'clone' is a PHP keyword to make a variable copy 
        //'add' is a method from DateTime object 
        //'DateInterval' is object that takes a formater like P for period then the number of week, day, month, etc. 
        
        return [
            'employee_id'=>fake()->numberBetween(2, 15),
            'title' => fake()->words(rand(1, 3), true), // 'true' = turns words in an array into a string
            'description' => fake()->sentence(rand(10, 20), true),
            'starts_at'=>$starts_at,
            'ends_at'=>$ends_at,
            'status'=>fake()->randomElement(['Lancé', 'Actif', 'Terminé']),
            
        ];
    }
}
