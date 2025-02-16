<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // Hard coded user Lili with 'admin' role
        User::factory()->create([
            'name' => 'Lili',
            'email' => 'lili@test.com',
            'role' => 'admin',
        ]);

    // Hard coded the 'user_id' to bind to the hard coded user 'Lili'
        Employee::factory()->create([
            'user_id'=> User::where('email', 'lili@test.com')->first()->id,
        ]);

        User::factory(14)->create();
        Employee::factory(14)->create();
        Project::factory(6)->create();
        Task::factory(20)->create();

        
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
